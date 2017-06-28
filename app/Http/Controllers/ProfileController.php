<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
        $this->validate($request, array(
            'facebook_id'   => 'required|max:255',
            'fname'         => 'required|max:255',
            'lname'         => 'required|max:255',
            'email'         =>  'required|email|max:255',
            'address1'      => 'required|max:255',
            'address2'      => 'required|max:255',
            'city'          => 'required|max:255',
            'state'         => 'required|max:255',
            'zip'           => 'required|max:255|numeric',
            'phone'         => 'required|max:255|numeric',
            ));

        $user = new User();
        $user->facebook_id = $request->facebook_id;
        $user->fname = $request->fname;
        $user->lname= $request->lname;
        $user->email = $request->email;
        $user->address1 = $request->address1;
        $user->address2 = $request->address2;
        $user->city = $request->city;
        $user->state = $request->state;
        $user->zip = $reuqest->zip;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->save();

        Session::flash('success', 'Profile was added');

        return redirect()->route();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
