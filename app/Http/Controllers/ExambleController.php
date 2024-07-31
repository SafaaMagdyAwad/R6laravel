<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExambleController extends Controller
{
    //
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
