<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\booking;
use Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function dashboard(){
        $booking = booking::where('user_id',Auth::user()->id)->orderBy('id', 'DESC')->take(5)->get();
        //return response()->json($booking);
        return view('user.dashboard',compact('booking'));
    }
}
