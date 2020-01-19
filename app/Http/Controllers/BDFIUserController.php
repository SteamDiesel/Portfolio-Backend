<?php

namespace App\Http\Controllers;

use App\BDFIUser;
use Illuminate\Http\Request;

class BDFIUserController extends Controller
{
    // /**
    //  * Display a listing of the resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function index()
    // {
    //     //
    // }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		
		$user = BDFIUser::firstOrCreate(['session_uuid' => $request->session_uuid]);
		
        $user->session_uuid = $request->session_uuid;
		$user->email = $request->email;
		$user->first_name = $request->first_name;
		$user->surname = $request->surname;
		$user->country = $request->country;
		$user->phone_number = $request->phone_number;
		$user->business_name = $request->business_name;
		$user->role = $request->role;
		$user->business_address = $request->business_address;
		$user->brand_image_url = $request->brand_image_url;
		$user->email_image_url = $request->email_image_url;
		$user->show_copy_button = $request->show_copy_button;
		$user->confirm_delete_prompts = $request->confirm_delete_prompts;
		$user->save();
		
    }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\BDFIUser  $bDFIUser
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show(BDFIUser $bDFIUser)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\BDFIUser  $bDFIUser
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit(BDFIUser $bDFIUser)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\BDFIUser  $bDFIUser
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, BDFIUser $bDFIUser)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\BDFIUser  $bDFIUser
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy(BDFIUser $bDFIUser)
    // {
    //     //
    // }
}
