<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    public function loginUser(Request $request)
    {
        $request->validate([
            'email'=>'required|string|email',
            'password'=>'required|string'
        ]);
        $credentials = request(['email', 'password']);

        if(!Auth::attempt($credentials)){
            return response()->json([
                'message'=>'Authentication Failed.'
            ], 401);
        }
        $user = $request->user();
        $tokenResult = $user->createToken('Personal Access Token');
        $token = $tokenResult->token;

        return response()->json([
            'auth_token'=>$tokenResult->accessToken,
            'token_type'=> 'Bearer',
            'expires_at'=> Carbon::parse(
                $tokenResult->token->expires_at
            )->toDateTimeString(),
            'message'=>'Success'
        ], 201);
    }


}
