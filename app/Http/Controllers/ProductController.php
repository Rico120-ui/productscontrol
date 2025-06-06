<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // ← this is likely what you intended



class ProductController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index' , compact('products'));

        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         // som rab hav form muy insert data jol
        // form create min mean data te tol tea ke create

        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'product_name' => 'required|min:2|max:100',
            'price' => 'required|numeric',
            'warranty' => 'numeric',
            'quantity' => 'numeric',
            'description' => 'required'
            // 'description' => 'required|regex:/(?!.*(spam))(?!.*(spy))(?!.*(junk))/'
            // 'description' => 'regex:/[^(spam)]+/'

        ]);

        $product = new Product();
        $product->product_name = $request->product_name;
        $product->price = $request->price;
        $product->warranty = $request->warranty;
        $product->quantity = $request->quantity;
        $product->description = $request->description;
        $product->save();
        return redirect('/products/create')->with('success' , 'The Product has been created successfully!');

        // Product::create([
        //     'product_name' => $request-> product_name,
        //     'price' => $request-> price,
        //     'warranty' => $request-> warranty,
        //     'quantity' => $request-> quantity,
        //     'description' => $request-> description,
        // ]);
        


        // Product::create($request->all());

        // echo $request-> product_name . "<hr>";
        // echo $request-> price . "<hr>";
        // echo $request-> quantity . "<hr>";
        // echo $request-> warranty . "<hr>";
        // echo $request-> description . "<hr>";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // show data  dea jeak leak ney row na muy
        $product = Product::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        // it show form for edit data dea mean srab
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // yk data dea ke kae aii in form edit yk tv update
        $request->validate([
            'product_name' => 'required|min:2|max:100',
            'price' => 'required|numeric',
            'warranty' => 'numeric',
            'quantity' => 'numeric',
            'description' => 'required'
            // 'description' => 'required|regex:/(?!.*(spam))(?!.*(spy))(?!.*(junk))/'
            // 'description' => 'regex:/[^(spam)]+/'

        ]);

        $product = Product::find($id);
        $product->product_name = $request->product_name;
        $product->price = $request->price;
        $product->warranty = $request->warranty;
        $product->quantity = $request->quantity;
        $product->description = $request->description;
        $product->save();
        return redirect('/products')->with('success' , 'The Product has been update successfully!');

    }
    public function delete($id){
        Product::find($id)->delete();
        return redirect('/products')->with('success','The product has been deleted successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // use for delete data nv jur dek na muy
    }
}
