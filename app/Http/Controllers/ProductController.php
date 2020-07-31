<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products= Product::all();
        return view('product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        
        $product = new Product();
        return view('product.create', compact('product'));


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $product = new Product();
        $product->product_name = $request->product_name;
        $product->products_codes = $request->products_codes;
        $product->product_line = $request->product_line;
        $product->product_scale = $request->product_scale;
        $product->quanitily_inStock = $request->quanitily_inStock;
        $product->product_vendor = $request->product_vendor;
        $product->product_description = $request->product_description;
        $product->buy_price = $request->buy_price;
        $product->MSRP = $request->MSRP;

        $product->save();
        return redirect('/product');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        // $product = new Product();
        // $product->product_name = $request->product_name;
        // $product->product_line = $request->product_line;
        // $product->product_vendor = $request->product_vendor;
        // $product->product_description = $request->product_description;
        // $product->save();
        // return redirect('/product');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $product=Product::findOrFail($id);
        return view('product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $product = Product::findOrFail($id);
        $product->products_codes = $request->products_codes;
        $product->product_name = $request->product_name;
        $product->products_codes = $request->products_codes;
        $product->product_line = $request->product_line;
        $product->product_scale = $request->product_scale;
        $product->quanitily_inStock = $request->quanitily_inStock;
        $product->product_vendor = $request->product_vendor;
        $product->product_description = $request->product_description;
        $product->buy_price = $request->buy_price;
        $product->MSRP = $request->MSRP;
        $product->save();
        return redirect('/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect('/product');
    }
}