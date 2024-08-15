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
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
            'email' => 'required|email',
        ]);
        // dd($data);
        // dd($data['subject']);
        Mail::to($data['email'])->send(new Contact($data['subject'], $data['message']));
    
        return redirect()->route('start');
    }
}
