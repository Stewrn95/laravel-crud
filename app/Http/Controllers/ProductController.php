<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Product;


class ProductController extends Controller
{
    public function index(){
        $products=Product::latest()->paginate(6);
        return view('products.index',['products'=>$products]);
    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $request){
       // dd($request);
        $request->validate([
            'name'=> 'required',
            'description'=>'required',
            'mrp'=>'required|numeric',
            'price'=> 'required|numeric',
            'image' => 'required|image|mimes:jpeg,jpg,png,gif|max:10000' // Updated to check for image type
        ]);

        $imageName=time().".".$request->image->extension();
        $request->image->move(public_path('products'), $imageName);

        $product =new Product;
        $product->image = $imageName;
        $product->name=$request->name;
        $product->description=$request->description;
        $product->mrp=$request->mrp;
        $product->price=$request->price;
        $product->save();
        return back()->withSuccess('Product Details Successfully Saved...');


    }
public function show($id){
    $product=Product::where('id', $id)->first();
    return view('products.show',['product'=>$product]);
}

public function edit($id){
    $product=Product::where('id', $id)->first();
    return view('products.edit',['product'=>$product]);
}

public function update(Request $request,$id){

    $request->validate([
        'name'=> 'required',
        'description'=>'required',
        'mrp'=>'required|numeric',
        'price'=> 'required|numeric',
        'image' => 'nullable|image|mimes:jpeg,jpg,png,gif|max:10000' // Updated to check for image type
    ]);

    $product=Product::where('id', $id)->first();

    if (isset($request->image)){
        $imageName=time().".".$request->image->extension();
        $request->image->move(public_path('products'), $imageName);
        $product->image=$imageName;
}
    

    $product->name=$request->name;
        $product->description=$request->description;
        $product->mrp=$request->mrp;
        $product->price=$request->price;
        $product->save();
        return back()->withSuccess('Product Details Successfully Updated...');
        

}
public function delete($id){
    $product=Product::where('id', $id)->first();
    $product->delete();
    return back()->withSuccess('Product Details Successfully Deleted...');
}


}