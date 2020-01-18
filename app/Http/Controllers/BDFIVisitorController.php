<?php

namespace App\Http\Controllers;

use App\BDFIVisitor;
use Illuminate\Http\Request;

class BDFIVisitorController extends Controller
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
		
		$entry = new BDFIVisitor();
		$entry->user_name = $request->user_name;
		$entry->user_email = $request->user_email;
		$entry->user_phone = $request->user_phone;
		$entry->user_business_name = $request->user_business_name;
		$entry->user_business_address = $request->user_business_address;
		$entry->ip_address = $request->ip();
		$entry->save();

		// return response()->json([
		// 	'request' => $request->all()
		// ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BDFIVisitor  $bDFIVisitor
     * @return \Illuminate\Http\Response
     */
    public function show(BDFIVisitor $bDFIVisitor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BDFIVisitor  $bDFIVisitor
     * @return \Illuminate\Http\Response
     */
    public function edit(BDFIVisitor $bDFIVisitor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BDFIVisitor  $bDFIVisitor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BDFIVisitor $bDFIVisitor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BDFIVisitor  $bDFIVisitor
     * @return \Illuminate\Http\Response
     */
    public function destroy(BDFIVisitor $bDFIVisitor)
    {
        //
    }
}
