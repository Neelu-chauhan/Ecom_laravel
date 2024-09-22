<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryTypeController extends Controller
{
    public function index(){
        $title ="Category Type";
        return view('category.index',compact('title'));
    }
}
