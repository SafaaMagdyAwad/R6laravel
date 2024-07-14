<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function contact(){
        return view('contact');
    }
    public function contactPost(Request $request){
        return "name is ". $request->name.
        " email is ". $request->email.
        " subject is ". $request->subject.
        " message is ". $request->message
        ;
    }
}
