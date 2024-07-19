<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('add_car');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         //validation
         $validatedData = $request->validate([
            'carTitle' => 'required|string',
            'discription' => 'required',
            'price' => 'required',
        ]);
        // dd($request->all());
        if($request->published=='on'){
            $published=true;
        }else{
            $published=false;
        }
        //create
        Car::create([
           'carTitle'=>$request->carTitle, 
           'discription'=>$request->discription, 
           'price'=>$request->price, 
           'published'=>$published, 
        ]);
        //return
        $cars=Car::all();
        return view('cars',['cars'=>$cars]);

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
