<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\CategoryTypeModdel;
use Illuminate\Http\Request;

class CategoryTypeController extends Controller
{
    public function index(){
        $title ="Category Type";
        $categoryType = CategoryTypeModdel::where('status',1)->get()->toArray();
        return view('category.index',compact('title','categoryType'));
    }
    public function create(){
        $title ="Create Category Type";
        return view('category.create',compact('title'));
    }

    public function store (Request $request){
      $validator =  $request->validate([
            'name' => 'required',
        ]);
        $category = new CategoryTypeModdel;
        $category->name        = $request->name;
        $category->description = $request->description;
       if( $category->save()){
        return redirect()->route('category-type.index')->with('success','Category Type Created Successfully');
       }else{
        return redirect()->route('category-type.index')->with('error','Category Type Failed to create.');
       }
    }

    public function edit(Request $request,$id){
        $title ="Edit Category Type";
        $categorytype =CategoryTypeModdel::find($id); 
        return view('category.edit',compact('title','categorytype'));
    }
    public function update(Request $request,$id){
        $validator =  $request->validate([
            'name' => 'required',
        ]);
        $category = CategoryTypeModdel::find($id);
        $category->name        = $request->name;
        $category->description = $request->description;
        $category->status = $request->status;
        if( $category->update()){
            return redirect()->route('category-type.index')->with('success','Category Type Updated Successfully');
        }else{
            return redirect()->back()->with('error','Category Type Failed to update.');
        }

    }
    public function destroy($id){
        $category = CategoryTypeModdel::find($id);
        $category->status =8;
        if( $category->update()){
            return redirect()->route('category-type.index')->with('success','Category Type Deleted Successfully');
        }else{
            return redirect()->back()->with('error','Category Type Failed to delete.');
        }
    }
}
