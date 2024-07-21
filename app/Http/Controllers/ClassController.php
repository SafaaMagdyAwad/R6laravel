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
        $classes=Classe::all();
        return view('classes',['classes'=>$classes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        // dd('create class');
        return view('add_class');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd(isset($request->isFulled));
        //validation
        $validatedData = $request->validate([
            'className' => 'required',
            'capacity' => 'required',
            'price' => 'required',
            'timeFrom' => 'required',
            'timeTo' => 'required',
        ]);
        // dd($request->all());
       
        //create
        Classe::create([
           'className'=>$request->className, 
           'capacity'=>$request->capacity, 
           'price'=>$request->price, 
           'isFulled'=>isset($request->isFulled), 
           'timeFrom'=>$request->timeFrom, 
           'timeTo'=>$request->timeTo, 
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
        $class=Classe::findOrFail($id);
        return view('class',['class'=>$class]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $class=Classe::findOrFail($id);
        return view('update_class',['class'=>$class]);
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
