<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use PHPUnit\Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }
    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'name'      => 'required|string|max:255', 
                'email'     => 'required|email|unique:users,email|max:255', 
                'password'  => 'required|string|min:6', 
            ]);
    
            if ($validator->fails()) {
                return response()->json(['success' => false, 'errors' => $validator->errors()], 422);
            }
    
            $user = new User();
            $user->name      = $request->name;
            $user->email     = $request->email;
            $user->password  = Hash::make($request->password);
    
            if ($user->save()) {
                return response()->json(['success' => true, 'message' => 'User registered successfully.']);
            }
            return response()->json(['success' => false, 'message' => 'Failed to save user data.'], 422);
         }  catch (Exception $e) {

            Log::error('Failed to save data: ' . $e->getMessage());
            return response()->json(['success' => false, 'message' => 'Failed to save data. Please try again'], 422);
        }
    }
    
}
