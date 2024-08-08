<?php

namespace App\Http\Controllers;

use App\Common;
use App\Models\Product;
use App\Rules\RangeRule;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    use Common;

    public function index()
    {
        //all products
        $products=Product::orderBy('created_at','desc')->get();
        $popular=Product::orderBy('like','desc')->get();
        return view('products',compact('products','popular'));
    }

    public function latest(){
        
        $products=Product::orderBy('created_at','desc')->limit(3)->get();
        return view('index',compact('products'));
    }

    public function like(Product $product){
        $product->update([
            'like'=>$product->like+1,
        ]);
        return redirect()->route('product.index');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('add_product');
    }
    public function about()
    {
        return view('about');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:20',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'price' => [ 'required','decimal:0,3',new RangeRule(100,5000)],
            'discription' => 'required|string',
        ]);
        $image_name=$this->upload_file($request->image,'assets/images/product');
        $validatedData['image']=$image_name;
        $validatedData['like']=0;
        Product::create($validatedData);
        return redirect()->route('product.latest');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('product',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('editProduct',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:20',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'price' => [ 'required','decimal:0,3',new RangeRule(100,5000)],
            'discription' => 'required|string',
        ]);
        $validatedData['like']=$product->like;
        $validatedData['image']=$request->hasFile('image')?$this->upload_file($request->image,'assets/images/product'):$product->image;
        // dd($validatedData);
        $product->update($validatedData);
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
