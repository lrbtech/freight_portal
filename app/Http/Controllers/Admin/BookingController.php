<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\service;
use App\Models\truck_owner;
use App\Models\assign_truck;
use App\Models\booking;
use App\Models\User;
use App\Models\settings;
use Auth;
use Yajra\DataTables\Facades\DataTables;
use PDF;
use Mail;

class BookingController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function booking(){
        $service = service::where('status',0)->get();
        $truck_owner = truck_owner::where('status',0)->get();
        return view('admin.booking',compact('service','truck_owner'));
    }

    public function checkboxAssignAgent(Request $request)
    {
        $data = booking::whereIn('id', $request->id)->get();
        foreach ($data as $row) {
            $booking = booking::find($row->id);
            $booking->assign_driver_id = $request->agent_id;
            $booking->assign_driver_date = date('Y-m-d');
            $booking->assign_driver_time = date('H:i:s');
            $booking->status = 1;
            $booking->save();

            $this->invoiceSendMail($booking->id);
        }
        return response()->json(["Successfully Update"], 200);
    }

    public function getBooking(){
        $booking = booking::orderBy('id', 'DESC')->get();

        return Datatables::of($booking)
            ->addColumn('checkbox', function ($booking) {
                if($booking->status == '0'){
                    return '<td><input type="checkbox" name="order_checkbox[]" class="order_checkbox" value="' . $booking->id . '"></td>';
                }
                else{
                    return '<td></td>';
                }
            })
            ->addColumn('booking_date', function ($booking) {
                return '<td>
                <p>' . date("d-m-Y",strtotime($booking->booking_date)) . '</p>
                <p>'.date('h:i a',strtotime($booking->time)).'</p>
                </td>';
            })
            ->addColumn('from_address', function ($booking) {
                return '<td>
                <p>' . $booking->from_address . '</p>
                </td>';
            })
            ->addColumn('to_address', function ($booking) {               
                return '<td>
                <p>' . $booking->to_address . '</p>
                </td>';
            })
            ->addColumn('service_details', function ($booking) {               
                return '<td>
                <p>' . $booking->service_name . '</p>
                </td>';
            })
            ->addColumn('total_km', function ($booking) {               
                return '<td>
                <p>' . $booking->total_km . '</p>
                </td>';
            })
            ->addColumn('total', function ($booking) {               
                return '<td>
                <p>' . $booking->total . '</p>
                </td>';
            })
            ->addColumn('status', function ($booking) {
                if($booking->status == '0'){
                    return '<td>New Request</td>';
                }
                else{
                    $truck_owner = truck_owner::find($booking->assign_driver_id);
                    return '<td>
                    <p>Assigned Driver</p>
                    <p>Driver Name : '.$truck_owner->name.'</p>
                    </td>';
                }
            })
            ->addColumn('action', function ($booking) {
                return '<td>
                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(140px, 183px, 0px); top: 0px; left: 0px; will-change: transform;">
                    <a target="_blank" href="/admin/print-invoice/'.$booking->id.'" class="dropdown-item">Print</a>
                    </div>
                </td>';
            })
            
        ->rawColumns(['booking_date', 'from_address', 'to_address','service_details', 'total_km','total','action','checkbox','status'])
        ->addIndexColumn()
        ->make(true);

        //return Datatables::of($orders) ->addIndexColumn()->make(true);
    }


    public function printInvoice($id){
        $booking = booking::find($id);
        $user = User::find($booking->user_id);
        $settings = settings::find(1);

        $amount_words = $this->displaywords($booking->total);

        $pdf = PDF::loadView('print.printinvoice',compact('booking','amount_words','user','settings'));
        $pdf->setPaper('A4');
        return $pdf->stream('report.pdf');
    }

    public function invoiceSendMail($id){
        $booking = booking::find($id);
        $user = truck_owner::find($booking->assign_driver_id);
        $settings = settings::find(1);
        $amount_words = $this->displaywords($booking->total);

        $pdf = PDF::loadView('print.printinvoice',compact('booking','amount_words','user','settings'));

        try{
            Mail::send('mail.invoice', compact('booking','amount_words','user','settings'), function($message)use($booking,$user,$pdf) {
            $message->to($user->email)->subject('Freight Portals Invoice ID : #'.$booking->id);
            //$message->cc('prasanthats@gmail.com')->subject('Freight Portals Invoice ID : #'.$booking->id);
            //$message->cc('thowsif@lrbinfotech.com')->subject('Freight Portals Invoice ID : #'.$booking->id);
            $message->from('info@lrbtech.com','Freight Portals');
            $message->attachData($pdf->output(), 'freight_portals_invoice_'.$booking->id.'.pdf');
            });
        }catch(JWTException $exception){
            $this->serverstatuscode = "0";
            $this->serverstatusdes = $exception->getMessage();
        }
        if (Mail::failures()) {
             $this->statusdesc  =   "Error sending mail";
             $this->statuscode  =   "0";

        }else{

           $this->statusdesc  =   "Mail sent Succesfully";
           $this->statuscode  =   "1";
        }
        return response()->json($this);
    }


    public function displaywords($number){
        $words = array('0' => '', '1' => 'one', '2' => 'two',
        '3' => 'three', '4' => 'four', '5' => 'five', '6' => 'six',
        '7' => 'seven', '8' => 'eight', '9' => 'nine',
        '10' => 'ten', '11' => 'eleven', '12' => 'twelve',
        '13' => 'thirteen', '14' => 'fourteen',
        '15' => 'fifteen', '16' => 'sixteen', '17' => 'seventeen',
        '18' => 'eighteen', '19' =>'nineteen', '20' => 'twenty',
        '30' => 'thirty', '40' => 'forty', '50' => 'fifty',
        '60' => 'sixty', '70' => 'seventy',
        '80' => 'eighty', '90' => 'ninety');
        $digits = array('', '', 'hundred', 'thousand', 'lakh', 'crore');
    
        $number = explode(".", $number);
        $result = array("","");
        $j =0;
        foreach($number as $val){
            // loop each part of number, right and left of dot
            for($i=0;$i<strlen($val);$i++){
                // look at each part of the number separately  [1] [5] [4] [2]  and  [5] [8]
    
                $numberpart = str_pad($val[$i], strlen($val)-$i, "0", STR_PAD_RIGHT); // make 1 => 1000, 5 => 500, 4 => 40 etc.
                if($numberpart <= 20){ // if it's below 20 the number should be one word
                    $numberpart = 1*substr($val, $i,2); // use two digits as the word
                    $i++; // increment i since we used two digits
                    $result[$j] .= $words[$numberpart] ." ";
                }else{
                    //echo $numberpart . "<br>\n"; //debug
                    if($numberpart > 90){  // more than 90 and it needs a $digit.
                        $result[$j] .= $words[$val[$i]] . " " . $digits[strlen($numberpart)-1] . " "; 
                    }else if($numberpart != 0){ // don't print zero
                        $result[$j] .= $words[str_pad($val[$i], strlen($val)-$i, "0", STR_PAD_RIGHT)] ." ";
                    }
                }
            }
            $j++;
        }
        if(trim($result[0]) != "") echo $result[0] . "AED ";
        if($result[1] != "") echo $result[1] . "Paise";
        echo " Only";
    }

    
}
