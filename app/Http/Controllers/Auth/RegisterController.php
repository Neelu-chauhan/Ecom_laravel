<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }
    public function store(Request $request){
       
            $validator = Validator::make($request->all(),[
             'name' => 'required',
             'email' => 'required|email',
             'password' => 'required',
            ]);
            if($validator->fails()){
             return response()->json(['error' => $validator->errors()], 422);
            }
            $user = new User;
            $user->name     = $request->name;
            $user->email    = $request->email;
            $user->password = Hash::make($request->password);
            if($user->save()){
                // return view('auth.login');
                return redirect()->route('login.index')->with('success','failed to save');

            }else{
                return redirect()->back()->back()->with('error','failed to save');
            }
            
     
    }
}
