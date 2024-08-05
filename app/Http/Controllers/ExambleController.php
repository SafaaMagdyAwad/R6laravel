<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ExambleController extends Controller
{
    //
    public function index(){
        $products=Product::orderBy('created_at','desc')->limit(3)->get();
        return view('index',compact('products'));
    }
    public function login(){
        return view('login');
    }
    public function loginPost(){
        return redirect()->route('start');
    }
    public function imageForm(){
        return view('upload_image');
    }
    public function image(Request $request){

            $file_extension = $request->image->getClientOriginalExtension();
            $file_name = time() . '.' . $file_extension;
            $path = 'assets/images';
            $request->image->move($path, $file_name);
            return 'Uploaded';
    }

}
