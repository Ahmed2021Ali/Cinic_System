<?php

namespace App\Http\Controllers\back;

use App\Http\trait\media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $major=DB::table('majors')->count();
        $user=DB::table('users')->count();
        $doctor=DB::table('doctors')->count();
        $booking=DB::table('bookings')->count();
        return view('backend.layouts.dashboard',compact('major','doctor','user','booking'));
    }
}
