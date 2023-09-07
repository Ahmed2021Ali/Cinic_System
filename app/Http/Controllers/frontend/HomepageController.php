<?php

namespace App\Http\Controllers\frontend;

use App\Models\Major;
use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomepageController extends Controller
{
    public function Home()
    {
        $major=Major::all();
        $doctor = Doctor::all();
        return view('frontend.patient.homepage',compact('doctor','major'));
    }
    public function Doctor(Request $request)
    {
        if(isset($request->city))
        {
            $doctor = Doctor::where('city',$request->city)->get();
            return view('frontend.patient.doctor',compact('doctor'));
        }
        else
        {
            $doctor = Doctor::all();
         return view('frontend.patient.doctor',compact('doctor'));
        }

    }
    public function Major()
    {
        $major=Major::all();
       return view('frontend.patient.major',compact('major'));
    }

    public function Login()
    {
        return view('frontend.login');
    }
    public function Registration()
    {
        return view('frontend.registration');
    }
    public function Booking()
    {
        return view('frontend.patient.booking');
    }
    public function Contact_Us()
    {
        return view('frontend.patient.contact_us');
    }
}
