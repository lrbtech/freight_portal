<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\truck_owner;
use App\Models\assign_truck;
use App\Models\service;

class TruckController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function saveTruck(Request $request){
        $this->validate($request, [
            'name'=>'required',
            'company_name'=>'required',
            'mobile'=>'required',
            'city'=>'required',
            'address'=>'required',
            'email'=>'required',
          ],[
            //'image.required' => 'Item Image Field is Required',
        ]);
        
        $truck_owner = new truck_owner;
        $truck_owner->name = $request->name;
        $truck_owner->company_name = $request->company_name;
        $truck_owner->mobile = $request->mobile;
        $truck_owner->email = $request->email;
        $truck_owner->city = $request->city;
        $truck_owner->address = $request->address;
        $truck_owner->save();
        return response()->json('successfully save'); 
    }

    public function updateTruck(Request $request){
        $this->validate($request, [
            'name'=>'required',
            'company_name'=>'required',
            'mobile'=>'required',
            'city'=>'required',
            'address'=>'required',
            'email'=>'required',
          ],[
            //'image.required' => 'Item Image Field is Required',
        ]);
        
        $truck_owner = truck_owner::find($request->id);
        $truck_owner->name = $request->name;
        $truck_owner->company_name = $request->company_name;
        $truck_owner->mobile = $request->mobile;
        $truck_owner->email = $request->email;
        $truck_owner->city = $request->city;
        $truck_owner->address = $request->address;
        $truck_owner->save();
        return response()->json('successfully update'); 
    }

    public function Truck(){
        $truck_owner = truck_owner::all();
        return view('admin.truck_owner',compact('truck_owner'));
    }

    public function editTruck($id){
        $truck_owner = truck_owner::find($id);
        return response()->json($truck_owner); 
    }
    
    public function deleteTruck($id,$status){
        $truck_owner = truck_owner::find($id);
        $truck_owner->status = $status;
        $truck_owner->save();
        return response()->json(['message'=>'Successfully Delete'],200); 
    }


    public function saveAssignTruck(Request $request){
        $this->validate($request, [
            'truck_id'=>'required',
            'vehicle_no'=>'required',
            'service_id'=>'required',
          ],[
            //'image.required' => 'Item Image Field is Required',
        ]);
        
        $assign_truck = new assign_truck;
        $assign_truck->truck_id = $request->truck_id;
        $assign_truck->vehicle_no = $request->vehicle_no;
        $assign_truck->service_id = $request->service_id;
        $assign_truck->save();
        return response()->json('successfully save'); 
    }

    public function updateAssignTruck(Request $request){
        $this->validate($request, [
            'truck_id'=>'required',
            'vehicle_no'=>'required',
            'service_id'=>'required',
          ],[
            //'image.required' => 'Item Image Field is Required',
        ]);
        
        $assign_truck = assign_truck::find($request->id);
        $assign_truck->truck_id = $request->truck_id;
        $assign_truck->vehicle_no = $request->vehicle_no;
        $assign_truck->service_id = $request->service_id;
        $assign_truck->save();
        return response()->json('successfully update'); 
    }

    public function AssignTruck($id){
        $assign_truck = assign_truck::all();
        $service = service::all();
        return view('admin.assign_truck',compact('assign_truck','service','id'));
    }

    public function editAssignTruck($id){
        $assign_truck = assign_truck::find($id);
        return response()->json($assign_truck); 
    }
    
    public function deleteAssignTruck($id,$status){
        $assign_truck = assign_truck::find($id);
        $assign_truck->status = $status;
        $assign_truck->save();
        return response()->json(['message'=>'Successfully Delete'],200); 
    }
}
