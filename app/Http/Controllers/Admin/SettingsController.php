<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin;
use App\Models\settings;
use App\Models\testimonials;
use App\Models\slider;
use Auth;
use Hash;
class SettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function changePassword()
    {
        $user = admin::find(Auth::guard('admin')->user()->id);
        return view('admin.change_password',compact('user'));
    }

    public function updateChangePassword(Request $request){
        $request->validate([
            'oldpassword' => 'required',
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6'
        ]);
        
        $hashedPassword = Auth::guard('admin')->user()->password;
 
        if (\Hash::check($request->oldpassword , $hashedPassword )) {
 
            if (!\Hash::check($request->password , $hashedPassword)) {
 
                $admin = admin::find($request->id);
                $admin->password = Hash::make($request->password);
                $admin->save();
 
                return response()->json(['message' => 'Password Updated Successfully!' , 'status' => 1], 200);
            }
 
            else{
                return response()->json(['message' => 'new password can not be the old password!' , 'status' => 0]);
            }
 
           }
 
        else{
            return response()->json(['message' => 'old password doesnt matched!' , 'status' => 0]);
        }
    }

    public function Settings(){
        $settings = settings::find(1);
        return view('admin.settings',compact('settings'));
    }

    public function updateSettings(Request $request){
        // $this->validate($request, [
        //     'insurance_percentage'=>'required',
        //     'vat_percentage'=> 'required',
        //     'postal_charge_percentage'=> 'required',
        //     'cod_amount'=> 'required',
        //   ],[
        //     'vat_percentage.required' => 'Vat Percentage Field is Required',
        // ]);
        $settings = settings::find($request->id);
        $settings->mobile = $request->mobile;
        $settings->landline = $request->landline;
        $settings->email = $request->email;
        $settings->admin_email = $request->admin_email;
        $settings->address = $request->address;
        $settings->facebook = $request->facebook;
        $settings->twitter = $request->twitter;
        $settings->instagram = $request->instagram;
        $settings->linkedin = $request->linkedin;
        $settings->youtube = $request->youtube;
        $settings->whatsapp = $request->whatsapp;
        $settings->footer_description = $request->footer_description;
        $settings->print_terms_and_conditions = $request->print_terms_and_conditions;

        if($request->logo!=""){
            $old_image = "upload_files/".$settings->logo;
            if (file_exists($old_image)) {
                @unlink($old_image);
            }
            if($request->file('logo')!=""){
            $image = $request->file('logo');
            $upload_image = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('upload_files/'), $upload_image);
            $settings->logo = $upload_image;
            }
        }


        $settings->save();

        return response()->json('successfully update'); 
    }

    public function AboutUs(){
        $settings = settings::find(1);
        return view('admin.about',compact('settings'));
    }

    public function updateAboutUs(Request $request){
        $settings = settings::find($request->id);
        $settings->about_us = $request->editor1;
        $settings->save();

        return back();
        //return response()->json('successfully update'); 
    }


    public function savetestimonials(Request $request){
        $this->validate($request, [
            'name'=>'required',
            'description'=>'required',
            'location'=>'required',
            'image' => 'required|mimes:jpeg,jpg,png,pdf|max:1000', // max 1000kb
          ],[
            'image.mimes' => 'Only jpeg, png and jpg images are allowed',
            'image.max' => 'Sorry! Maximum allowed size for an image is 1MB',
            'image.required' => 'Testimonials Image Field is Required',
        ]);
        
        $testimonials = new testimonials;
        $testimonials->name = $request->name;
        $testimonials->description = $request->description;
        $testimonials->location = $request->location;
        if($request->image!=""){
            if($request->file('image')!=""){
            $image = $request->file('image');
            $upload_image = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('upload_files/'), $upload_image);
            $testimonials->image = $upload_image;
            }
        }
        $testimonials->save();
        return response()->json('successfully save'); 
    }

    public function updatetestimonials(Request $request){
        $this->validate($request, [
            'name'=>'required',
            'description'=>'required',
            'location'=>'required',
            'image' => 'mimes:jpeg,jpg,png,pdf|max:1000', // max 1000kb
          ],[
            'image.mimes' => 'Only jpeg, png and jpg images are allowed',
            'image.max' => 'Sorry! Maximum allowed size for an image is 1MB',
            //'image.required' => 'Item Image Field is Required',
        ]);
        
        $testimonials = testimonials::find($request->id);
        $testimonials->name = $request->name;
        $testimonials->description = $request->description;
        $testimonials->location = $request->location;
        if($request->image!=""){
            $old_image = "upload_files/".$testimonials->image;
            if (file_exists($old_image)) {
                @unlink($old_image);
            }
            if($request->file('image')!=""){
            $image = $request->file('image');
            $upload_image = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('upload_files/'), $upload_image);
            $testimonials->image = $upload_image;
            }
        }
        $testimonials->save();
        return response()->json('successfully update'); 
    }

    public function testimonials(){
        $testimonials = testimonials::all();
        return view('admin.testimonials',compact('testimonials'));
    }

    public function edittestimonials($id){
        $testimonials = testimonials::find($id);
        return response()->json($testimonials); 
    }
    
    public function deletetestimonials($id,$status){
        $testimonials = testimonials::find($id);
        $testimonials->status = $status;
        $testimonials->save();
        return response()->json(['message'=>'Successfully Delete'],200); 
    }


    public function saveslider(Request $request){
        $this->validate($request, [
            'slider_name'=>'required',
            'description'=>'required',
            'button_name'=>'required',
            'button_link'=>'required',
            'image' => 'required|mimes:jpeg,jpg,png,pdf|max:5000', // max 1000kb
          ],[
            'image.mimes' => 'Only jpeg, png and jpg images are allowed',
            'image.max' => 'Sorry! Maximum allowed size for an image is 1MB',
            'image.required' => 'Slider Image Field is Required',
        ]);
        
        $slider = new slider;
        $slider->slider_name = $request->slider_name;
        $slider->description = $request->description;
        $slider->button_name = $request->button_name;
        $slider->button_link = $request->button_link;
        if($request->image!=""){
            if($request->file('image')!=""){
            $image = $request->file('image');
            $upload_image = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('upload_files/'), $upload_image);
            $slider->image = $upload_image;
            }
        }
        $slider->save();
        return response()->json('successfully save'); 
    }

    public function updateslider(Request $request){
        $this->validate($request, [
            'slider_name'=>'required',
            'description'=>'required',
            'button_name'=>'required',
            'button_link'=>'required',
            'image' => 'mimes:jpeg,jpg,png,pdf|max:1000', // max 1000kb
          ],[
            'image.mimes' => 'Only jpeg, png and jpg images are allowed',
            'image.max' => 'Sorry! Maximum allowed size for an image is 1MB',
            //'image.required' => 'Item Image Field is Required',
        ]);
        
        $slider = slider::find($request->id);
        $slider->slider_name = $request->slider_name;
        $slider->description = $request->description;
        $slider->button_name = $request->button_name;
        $slider->button_link = $request->button_link;
        if($request->image!=""){
            $old_image = "upload_files/".$slider->image;
            if (file_exists($old_image)) {
                @unlink($old_image);
            }
            if($request->file('image')!=""){
            $image = $request->file('image');
            $upload_image = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('upload_files/'), $upload_image);
            $slider->image = $upload_image;
            }
        }
        $slider->save();
        return response()->json('successfully update'); 
    }

    public function slider(){
        $slider = slider::all();
        return view('admin.slider',compact('slider'));
    }

    public function editslider($id){
        $slider = slider::find($id);
        return response()->json($slider); 
    }
    
    public function deleteslider($id,$status){
        $slider = slider::find($id);
        $slider->status = $status;
        $slider->save();
        return response()->json(['message'=>'Successfully Delete'],200); 
    }

}
