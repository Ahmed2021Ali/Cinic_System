<?php

namespace App\Http\Controllers\frontend\doctors_major;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class Major_doctorsController extends Controller
{
    public function index($id)
    {
        $doctor = Doctor::where('major_id', $id)->paginate(8);
       return view('frontend.patient.doctor',compact('doctor'));
    }
}
