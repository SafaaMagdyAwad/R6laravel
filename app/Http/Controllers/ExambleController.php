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
        return "login post";
    }
}
