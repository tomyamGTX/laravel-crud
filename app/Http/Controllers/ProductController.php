<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\productFormRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
        return view('index', ['products'=>$product]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(productFormRequest $request)
    {
        $data=$request->validated();
        $product = Product :: create($data);
        return redirect('/product_create')->with('message','Product Added Successfully');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($product_id)
    {
        $product = Product::find($product_id);
        return view('/edit', ['product'=>$product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(productFormRequest $request,$product_id)
    {
        $data=$request->validated();
        $product = Product :: where('id',$product_id)->update([
            'name'=>$data['name'],
            'description'=>$data['description'],
            'price'=>$data['price'],
            'url'=>$data['url'],
        ]);
        return redirect('/products')->with('message','Product Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($product_id)
    {
        $product =  Product::find($product_id)->delete();
        return redirect('/products')->with('message','Product Delete Successfully');
    }
}
