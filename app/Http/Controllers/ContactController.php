<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //
    public function contact(){
        return view('contact');
    }
    public function contactPost(Request $request){
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
            'email' => 'required|email',
        ]);
        // dd($data);
        Mail::to('R6LARAVEL@site.com')->send(new Contact($data)); //'R6LARAVEL@site.com' is the sender
    
        return redirect()->route('start');
    }
}
