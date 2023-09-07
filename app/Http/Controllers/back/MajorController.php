<?php

namespace App\Http\Controllers\back;

use App\Models\Major;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\majors\MajorsStoreRequest;

class MajorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $detalis=Major::all();
        return view('backend.majors.index',compact('detalis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.majors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MajorsStoreRequest $request)
    {
        $data =$request->except('_token');
        DB::table('majors')->insert($data);
        return redirect()->back()->with('success','Successfull Operation');
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
        $detalis = DB::table('majors')->where('id', $id)->first();
        return view('backend.majors.edit',compact('detalis'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MajorsStoreRequest $request, string $id)
    {
        $data=$request->except('_token','_method');
         DB::table('majors')->where('id', $id)->update($data);
         return redirect()->back()->with('success','Successfull Operation');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('majors')->where('id',$id)->delete();
        return redirect()->back()->with('success','Successfull Operation');
    }
}
