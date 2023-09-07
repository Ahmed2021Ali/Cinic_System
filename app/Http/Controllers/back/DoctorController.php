<?php

namespace App\Http\Controllers\back;

use App\Http\trait\media;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\doctors\DoctorStoreRequest;

class DoctorController extends Controller
{
    use media;
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if (isset($request->id))
        {
            $doctor = Doctor::where('major_id', $request->id)->get();
            return view('backend.doctors.index',compact('doctor'));
        }
        else
        {
            $doctor = Doctor::get();
             return view('backend.doctors.index',compact('doctor'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $major=DB::table('majors')->select('title','id')->get();
        return view('backend.doctors.create',compact('major'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DoctorStoreRequest $request)
    {
        $data =$request->except('_token','password_confirmation');
        if(isset($request->image))
        {
            $PhotoName=$this->Upload_image($request->image,'doctors');
            $data['image']=$PhotoName;
        }
       DB::table('doctors')->insert($data);
       return redirect()->back()->with('success','تم اضافة الدكتور بنجاح');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $doctor = Doctor::where('id',$id)->first();
        $major=DB::table('majors')->select('title','id')->get();
        return view('backend.doctors.edit',compact('doctor','major'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data=$request->except('_token','_method','password_confirmation');

        if(isset($request->image))
        {
            $PhotoName=$this->Upload_image($request->image,'doctors');
            $data['image']=$PhotoName;
        }
        DB::table('doctors')->where('id', $id)->update($data);

        return redirect()->back()->with('success','تم التحديث بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $oldPhotoName = Doctor::select('image')->where('id',$id)->first()->image;
        if(isset($oldPhotoName))
        {
          $photoPath = public_path('\images\doctors').$oldPhotoName;
          $this->deletePhoto($photoPath);
        }
        //delete doctor
         Doctor::where('id',$id)->delete();
         return redirect()->back()->with('success','تم الحذف بنجاح');
    }
}
