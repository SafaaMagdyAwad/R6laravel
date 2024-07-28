<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private Car $car;
    public function __construct(){
    
    }
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
        $car=Car::findOrFail($id);
        if($car){
            $car->carTitle=$request->carTitle;
            $car->discription=$request->discription;
            $car->price=$request->price;
            $car->published=isset($request->published);

            $car->save();
        }
        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Car::where('id',$id)->delete();
        return $this->index();

    }


    public function showDeleted(){
        $cars=Car::onlyTrashed()->get();
        return view('trashedCars',compact('cars'));
    }
    public function perminantDelete($id){
        Car::where('id',$id)->forceDelete();
        return $this->showDeleted();

    }
    public function restore(Car $car){
       
        // dd("safaa");
        $car->withTrashed()
        ->restore();
        return redirect()->route('cars.deleted');
    }
}
