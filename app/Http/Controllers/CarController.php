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
        return view('cars',compact('cars'));
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
        $validatedData['published']=isset($request->published); 
       
        //create
        Car::create($validatedData);
        //return
       
        return redirect()->route('car.index');

    }

    /**
     * Display the specified resource.
     */
    public function show($car)
    {
        return view('car',compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $car=Car::findOrFail($id);
        // dd($car['id']);
        return view('edit_car',compact('car'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $validatedData = $request->validate([
            'carTitle' => 'required|string',
            'discription' => 'required',
            'price' => 'required',
        ]);
        $validatedData['published']=isset($request->published); 
       
        Car::findOrFail($id)->update($validatedData);
        
        return redirect()->route('car.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Car::where('id',$id)->delete();
        return redirect()->route('car.index');

    }


    public function showDeleted(){
        $cars=Car::onlyTrashed()->get();
        return view('trashedCars',compact('cars'));
    }
    public function perminantDelete($id){
        Car::withTrashed()->where('id',$id)->forceDelete();
        return redirect()->route('car.deleted');

    }
    public function restore(Car $car){
       
        // dd("safaa");
        $car->withTrashed()
        ->restore();
        return redirect()->route('cars.deleted');
    }
}
