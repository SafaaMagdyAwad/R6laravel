<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index(){
         
        $products=Product::orderBy('created_at','desc')->limit(3)->get();
        return view('index',compact('products'));
    }
    public function about()
    {
        return view('about');
    }
    public function like(Product $product){
        $product->update([
            'like'=>$product->like+1,
        ]);
        return redirect()->route('public.products');
    }
    public function products(){
        $products=Product::orderBy('created_at','desc')->get();
        $popular=Product::orderBy('like','desc')->get();
        return view('products',compact('products','popular'));
    }
    public function productDetail(Product $product){
        $releated=Product::where('title',$product->title)->get();
        return view('product-detail',compact('product','releated'));
    }
    public function faq(){
        return view('faq');
    }
    public function contact(){
        return view('contactpage');
    }
}
