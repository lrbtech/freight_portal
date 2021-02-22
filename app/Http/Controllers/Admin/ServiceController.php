<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\service;

class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function saveService(Request $request){
        $this->validate($request, [
            'rate_per_km'=>'required',
            'service_name'=>'required',
            'rate_per_km_loaders'=>'required',
            'image' => 'mimes:jpeg,jpg,png,pdf|max:1000', // max 1000kb
          ],[
            'image.mimes' => 'Only jpeg, png and jpg images are allowed',
            'image.max' => 'Sorry! Maximum allowed size for an image is 1MB',
            //'image.required' => 'Item Image Field is Required',
        ]);
        
        $service = new service;
        $service->rate_per_km = $request->rate_per_km;
        $service->rate_per_km_loaders = $request->rate_per_km_loaders;
        $service->service_name = $request->service_name;
        if($request->image!=""){
            if($request->file('image')!=""){
            $image = $request->file('image');
            $upload_image = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('upload_files/'), $upload_image);
            $service->image = $upload_image;
            }
        }
        $service->save();
        return response()->json('successfully save'); 
    }

    public function updateService(Request $request){
        $this->validate($request, [
            'rate_per_km'=>'required',
            'service_name'=>'required',
            'rate_per_km_loaders'=>'required',
            'image' => 'mimes:jpeg,jpg,png,pdf|max:1000', // max 1000kb
          ],[
            'image.mimes' => 'Only jpeg, png and jpg images are allowed',
            'image.max' => 'Sorry! Maximum allowed size for an image is 1MB',
            //'image.required' => 'Item Image Field is Required',
        ]);
        
        $service = service::find($request->id);
        $service->rate_per_km = $request->rate_per_km;
        $service->rate_per_km_loaders = $request->rate_per_km_loaders;
        $service->service_name = $request->service_name;
        if($request->image!=""){
            $old_image = "upload_files/".$service->image;
            if (file_exists($old_image)) {
                @unlink($old_image);
            }
            if($request->file('image')!=""){
            $image = $request->file('image');
            $upload_image = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('upload_files/'), $upload_image);
            $service->image = $upload_image;
            }
        }
        $service->save();
        return response()->json('successfully update'); 
    }

    public function NewService(){
        $service = service::all();
        return view('admin.service',compact('service'));
    }

    public function editService($id){
        $service = service::find($id);
        return response()->json($service); 
    }
    
    public function deleteService($id,$status){
        $service = service::find($id);
        $service->status = $status;
        $service->save();
        return response()->json(['message'=>'Successfully Delete'],200); 
    }
}
