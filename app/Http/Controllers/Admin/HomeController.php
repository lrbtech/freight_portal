<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\truck_owner;
use App\Models\booking;
use App\Models\User;
use App\Models\service;
class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function dashboard(){
        $client = truck_owner::all()->count();
        $customer = User::all()->count();
        $booking = booking::all()->count();
        $service = service::all()->count();
        return view('admin.dashboard',compact('client','customer','booking','service'));
    }
}
