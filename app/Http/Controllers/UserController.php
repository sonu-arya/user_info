<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Info;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('userInfo');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'gender' => 'required',
            'mobile' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'hobbies' => 'required'
            ]);

        $info = new Info;
        $info->first_name=$request->input('fName');
        $info->last_name=$request->input('lName');
        $info->email=$request->input('email');
        $info->dob=$request->input('dob');
        $info->mobile=$request->input('mobile');
        $info->designation=$request->input('designation');
        $info->gender=$request->input('gender');
        $info->hobbies=implode(",",$request->input('hobbies'));
        $info->save();
        return back()->with('success', 'User Information Saved.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $infos = Info::all();
        return view('showInfo',["infos"=>$infos]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
