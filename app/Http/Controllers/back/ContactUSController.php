<?php

namespace App\Http\Controllers\back;

use App\Models\ContactUS;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\doctors\DoctorStoreRequest;


class ContactUSController extends Controller
{
    public function index()
    {
       $contact= DB::table('contact_us')->get();
        return view('backend.contact_us.index',compact('contact'));
    }
    public function destroy($id)
    {
        DB::table('contact_us')->where('id',$id)->delete();
        return redirect()->back()->with('success','Successfull Operation');
    }
}
