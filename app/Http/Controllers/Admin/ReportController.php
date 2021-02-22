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

class ReportController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
        date_default_timezone_set("Asia/Dubai");
        date_default_timezone_get();
    }

    

    public function bookingreport(){
        return view('admin.booking_report');
    }


    public function getbookingreport($fdate,$tdate){

        $fdate = date('Y-m-d', strtotime($fdate));
        $tdate = date('Y-m-d', strtotime($tdate));

        if($fdate != '1970-01-01' && $tdate != '1970-01-01'){
            $booking = booking::whereBetween('date', [$fdate, $tdate])->orderBy('id','DESC')->get();
        }else{
            $booking = booking::orderBy('id','desc')->get();
        }

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


}
