<?php

namespace App\Http\Controllers\back;

use App\Http\trait\media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;

class UserController extends Controller
{
    use media;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $detalis=DB::table('users')->get();
        return view('backend.users.index',compact('detalis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserStoreRequest $request)
    {
        $data =$request->except('_token','password_confirmation');
        $data['password'] = $this->hash($request->password);
        DB::table('users')->insert($data);
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
        $user = DB::table('users')->where('id', $id)->first();
        return view('backend.users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserUpdateRequest $request, string $id)
    {
        $data=$request->except('_token','_method','password_confirmation');
        $data['password'] = $this->hash($request->password);
        DB::table('users')->where('id', $id)->update($data);
        return redirect()->back()->with('success','Successfull Operation');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('users')->where('id',$id)->delete();
        return redirect()->back()->with('success','Successfull Operation');
    }
}
