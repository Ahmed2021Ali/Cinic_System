<?php

namespace App\Http\Controllers\frontend\contact_us;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{

    public function store(Request $request)
    {
        $data =$request->except('_token');
       DB::table('contact_us')->insert($data);
       return redirect()->back()->with('success','تم أرسال الرسالة الي القسم المختص');
    }

}
