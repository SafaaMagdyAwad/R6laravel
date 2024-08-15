<?php

namespace App\Http\Controllers;

// use App\common;
use App\Models\Car;
use App\Models\Category;
use Illuminate\Http\Request;

class CarController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
   
    
    public function index()
    {
        $cars=Car::with('category')->get();
        return view('cars',compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {        
        $categories=$this->getAll(Category::class);

        return view('add_car',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->baseStore($request,Car::class,"car");
        //return
        return redirect()->route('car.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        $car=Car::with('category')->findOrFail($id);
        // dd($car);//
        return view('car',compact('car'));
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        $categories=$this->getAll(Category::class);
        return view('edit_car',compact('car','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Car $car)
    { 
        $this->baseUpdate($request,$car,"car");
        return redirect()->route('car.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        //
        $this->baseDelete($car);
        return redirect()->route('car.index');

    }


    public function showDeleted(){
        $cars=$this->baseDeleted(Car::class);
        return view('trashedCars',compact('cars'));
    }
    public function perminantDelete(Car $car){
        $car->forceDelete();
        return redirect()->route('cars.deleted');

    }
    public function restore(Car $car){
        $car->restore();
        return redirect()->route('cars.deleted');
    }
}
