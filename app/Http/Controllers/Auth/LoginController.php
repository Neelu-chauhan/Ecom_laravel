<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){

        return view('auth.login');
    }
    public function login(Request $request){
        $validate =$request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required',
        ]);
        if(Auth::attempt($validate)){
            return response()->json(['success' => true, 'message' => 'User registered successfully.']);

        }else{
            // return response()->json(['success' => false, 'message' => 'Invalid email or password']);
            return response()->json(['success' => false, 'message' => 'Invalid password'], 401);
        }

        
    }
    public function dashboard(){
        if(Auth::check()){
            return view('welcome');
        }else{
            return redirect()->route('login.index');
        }
    }


    public function logout(){
        $logout= Auth::logout();
        if($logout){
            // dd('hii');
            return redirect()->route('login.index')->with('success','Logout Successfully');
        }else{
            // dd('hello');
            return redirect()->back();
        }
    }
}
