<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class AdminController extends Controller
{
    public function view_category(){

        $data = Category::all();

        return view('admin.category',compact('data'));
    }

    public function add_cat(Request $request){
        $cat = new Category;

        $cat->category_name = $request->category;

        $cat->save();

        return redirect()->back();
    }

    public function delete_category($id){

        $data = Category::find($id);

        $data->delete();

        return redirect()->back();
    }

    public function edit_category($id){

        $data = Category::find($id);
        return view('admin.edit_category');
    }
}
