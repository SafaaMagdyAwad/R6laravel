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
        $cars=Car::all();
        return view('cars',['cars'=>$cars]);
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
       
        //create
        Car::create([
           'carTitle'=>$request->carTitle, 
           'discription'=>$request->discription, 
           'price'=>$request->price, 
           'published'=>isset($request->published), 
        ]);
        //return
       
        return $this->index();

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $car=Car::findOrFail($id);
        return view('car',['car'=>$car]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $car=Car::findOrFail($id);
        // dd($car['id']);
        return view('edit_car',['car'=>$car]);

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
