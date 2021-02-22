<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\service;
use App\Models\User;
use App\Models\slider;
use App\Models\testimonials;
use App\Models\settings;
use App\Models\assign_truck;
use Hash;
use Mail;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        $service = service::where('status',0)->get();
        $testimonials = testimonials::where('status',0)->get();
        $slider = slider::where('status',0)->get();
        $settings = settings::find(1);
        return view('website.home',compact('service','testimonials','slider','settings'));
    }
    public function about()
    {
      $settings = settings::find(1);
        return view('website.about',compact('settings'));
    }
    public function contact()
    {
      $settings = settings::find(1);
        return view('website.contact',compact('settings'));
    }
    public function service()
    {
      $settings = settings::find(1);
      $service = service::where('status',0)->get();
      $assign_truck = assign_truck::all();

      return view('website.service',compact('service','settings','assign_truck'));
    }



    public function getServiceData($id)
    {
      $data = service::find($id);
      return response()->json($data); 
    }

  public function saveUserRegister(Request $request){
      $this->validate($request, [
          'name'=>'required|unique:users',
          'email'=>'required|unique:users',
          'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
          'password_confirmation' => 'min:6',
        ],[
          //'image.required' => 'Item Image Field is Required',
      ]);
      
      $user = new User;
      $user->name = $request->name;
      $user->business_type = $request->business_type;
      $user->company_name = $request->company_name;
      $user->mobile = $request->mobile;
      $user->email = $request->email;
      $user->password = Hash::make($request->password);
      $user->save();

      return response()->json('successfully save'); 
  }



public function contactsendmail(Request $request){
  $request->validate([
       'name'=>'required',
       'email'=>'required',
       'mobile'=>'required',
       'message'=>'required',
  ]);
  $all = $request->all();
  $settings = settings::find(1);
  Mail::send('mail.contact_mail',compact('all'),function($message) use($all,$settings){
       $message->to($settings->admin_email)->subject('Freight Portal Contact Page');
       $message->from('info@lrbtech.com',$all['name']);
  });
  return response()->json(['message'=>'Successfully Send'],200); 
}

public function newslettersendmail(Request $request){
  $request->validate([
       'email'=>'required',
  ]);
  $all = $request->all();
  $settings = settings::find(1);
  Mail::send('mail.newsletter_mail',compact('all'),function($message) use($all,$settings){
       $message->to($settings->admin_email)->subject('Freight Portal Newsletter');
       $message->from('info@lrbtech.com');
  });
  return response()->json(['message'=>'Successfully Send'],200); 
}


}
