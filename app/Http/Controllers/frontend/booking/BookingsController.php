<?php

namespace App\Http\Controllers\frontend\booking;

use App\Events\NewBookingEven;
use App\Models\Doctor;
use App\Models\Booking;
use App\Mail\SendDoctorMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\bookings\StoreBookingRequest;

class BookingsController extends Controller
{
    public function create($id)
    {
        $doctor=Doctor::where('id',$id)->first();
        return view('frontend.patient.booking',compact('doctor'));
    }
    public function store(StoreBookingRequest $request,$id)
    {
        $data =$request->except('_token');
        $data['doctor_id']=$id;
        $booking= Booking::create($data);
        event(new NewBookingEven($booking));
       return redirect()->back()->with('success','تم الحجز موعد بنجاج و سوف يتم تفاصيل الموعد في الميل الخاص  بكم');
    }
}
