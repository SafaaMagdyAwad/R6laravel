<?php

namespace App\Http\Controllers;

use App\common;
use App\Models\Product;
use App\Rules\RangeRule;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    use common;
    public function index()
    {
        //all products
    }
    public function latest(){
        $products=Product::orderBy('created_at','desc')->limit(3)->get();
        return view('index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('add_product');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:20',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'price' => [ 'required','decimal:0,3',new RangeRule(100,5000)],
            'discription' => 'required|string',
        ]);
        $image_name=isset($request->image)?$this->upload_file($request->image,'assets/images'):"null";
        $validatedData['image']=$image_name;
        Product::create($validatedData);
        return redirect()->route('latest');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
