<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

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
        return view('admin.edit_category',compact('data'));
    }

    public function update_category(Request $request ,$id){
        $data = Category::find($id);

        $data->category_name = $request->category;

        $data->save();
        return redirect('/view_category');
    }

    public function add_product(){

        $category = Category::all();
        return view('admin.add_product',compact('category'));
    }

    public function upload_product(Request $request){

        $data = new Product;

        $data->title = $request->title;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->quantity = $request->qty;
        $data->category = $request->cat;

        $image = $request->p_image;

        if($image){
            $imagename = time().'.'.$image->getClientOriginalExtension();

            $request->p_image->move('products',$imagename);

            $data->image = $imagename;
        }

        $data->save();

        return redirect()->back();

    }

    public function view_product(){

        $product = Product::paginate(3);
        return view('admin.view_product',compact('product'));
    }

    public function delete_prod($id){
        $prod = Product::find($id);

        $image_path = public_path('products/'.$prod->image);

        if(file_exists($image_path)){
            unlink($image_path);
        }

        $prod->delete();

        return redirect()->back();
    }

    public function update_prod($id){
        $prod = Product::find($id);

        $category = Category::all();
        
        return view('admin.update_product',compact('prod','category'));
    }

    public function edit_product(Request $request, $id){
        $data = Product::find($id);

        $data->title = $request->title;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->quantity = $request->qty;
        $data->category = $request->category;

        $image = $request->image;

        if($image){
            $imagename = time().'.'.$image->getClientOriginalExtension();

            $request->image->move('products',$imagename);

            $data->image = $imagename;
        }

        $data->save();

        return redirect('/view_product');
    }
}
