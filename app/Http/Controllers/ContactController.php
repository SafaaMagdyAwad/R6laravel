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
        "<br> email is ". $request->email.
        "<br> subject is ". $request->subject.
        "<br> message is ". $request->message;
    }
}
