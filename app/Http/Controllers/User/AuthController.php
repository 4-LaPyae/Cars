<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request){
         $request->validate([
            "name"=>"required|min:3",
            "email"=>"required|unique:users,email",
            "password"=>"required|min:8|confirmed",
            //"password_confirmation"=>"password:same"
        ]);
        //return $request;
        User::create([
            "name"=>$request->name,
            "email"=>$request->email,
            "password"=>Hash::make($request->password)
        ]);

        return response()->json([
            "message"=>"user is registered."
        ]);
     }

    public function login(Request $request){
        $request->validate([
            "email"=>"required|email",
            "password"=>"required|min:8"
        ]);
        //return $request;
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
            $token = Auth::user()->createToken('car')->plainTextToken;
            return response()->json([
                "token"=>$token,
            ]);
        }
        return response()->json([
            "message"=>"user not found!"
        ]);
    }

    public function logout(){
        Auth::user()->currentAccessToken()->delete();
        return response()->json([
            "message"=>"token is deleted.",
        ]);
    }
}
