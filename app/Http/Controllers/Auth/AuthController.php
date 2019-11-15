<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
        /**
     * Register a new user via api
     *
     * @return \Illuminate\Http\Response
     */
    public function registerNewUser(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|confirmed'
        ]);
        
        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        $user->save();

        return response()->json([
            'message'=>'Created new User!',
            'show_register' => false
        ], 201);
    }


        /**
     * Register a new user via api
     *
     * @return \Illuminate\Http\Response
     */
    public function loginUser()
    {
        return response()->json([
            'message'=>'Login Route and method returned response'
        ], 201);
    }


}
