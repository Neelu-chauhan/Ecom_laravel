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
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if(Auth::attempt($validate)){
            return redirect()->route('dashboard')->with('success','Login Successfully.');
        }else{
            return redirect()->back()->with('error','Invalid email or password');
        }
        
    }
    public function dashboard(){
        if(Auth::check()){
            return view('welcome');
        }else{
            return redirect()->route('login.index')->with('error','Please Login');
        }
    }


    public function logout(){
        $logout= Auth::logout();
        if($logout){

            return redirect()->route('login.index')->with('success','Logout Successfully');
        }else{
            return redirect()->back()->with('error','Failed to Logout');
        }
    }
}
