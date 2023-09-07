<?php

namespace App\Http\Controllers\back;

use App\Models\Booking;
use App\Models\Major;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class BookingController extends Controller
{
    public function index()
    {
        $booking = Booking::all();
        return view('backend.bookings.index',compact('booking'));
    }
    public function destroy($id)
    {
        DB::table('bookings')->where('id',$id)->delete();
        return redirect()->back()->with('success','Successfull Operation');
    }


}
