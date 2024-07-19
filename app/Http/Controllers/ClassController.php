<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use Illuminate\Http\Request;

class ClassController extends Controller
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
        return view('add_class');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validation
        $validatedData = $request->validate([
            'className' => 'required|string',
            'capacity' => 'required',
            'price' => 'required',
            'timeFrom' => 'required',
            'timeTo' => 'required',
        ]);
        // dd($request->all());
        if($request->isFulled=='on'){
            $fulled=true;
        }else{
            $fulled=false;
        }
        //create
        Classe::create([
           'className'=>$request->className, 
           'capacity'=>$request->capacity, 
           'price'=>$request->price, 
           'isFulled'=>$fulled, 
           'timeFrom'=>$request->timeFrom, 
           'timeTo'=>$request->timeTo, 
        ]);
        //return
        $classes=Classe::all();
        return view('classes',['classes'=>$classes]);

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
