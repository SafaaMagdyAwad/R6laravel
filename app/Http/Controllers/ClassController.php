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
        $classes=Classe::whereNull('deleted_at')->get();
        // dd($classes);
        return view('classes',compact('classes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
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
            'className' => 'required|string|max:50',
            'capacity' => 'required|integer',
            'price' => 'required|decimal:0,3',
            'timeFrom' => 'required',
            'timeTo' => 'required|after:timeFrom',
        ]);
        // dd($request->all());
       $validatedData['isFulled']=isset($request->isFulled);
    //    dd($validatedData);
        //create
        Classe::create($validatedData);
        //return
        return $this->index();

    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        $class=Classe::findOrFail($id);
        // dd($class->className);
        return view('class',['class'=>$class]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {        $class=Classe::findOrFail($id);

        return view('update_class',['class'=>$class]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $id)
    {        $class=Classe::findOrFail($id);

        $validatedData = $request->validate([
            'className' => 'string|max:50',
            'capacity' => 'integer',
            'price' => 'decimal:0,3',
            
            'timeTo' => '|after:timeFrom',
        ]);
       $validatedData['isFulled']=isset($request->isFulled);
       $validatedData['timeFrom']=$request->timeFrom;
        // dd($validatedData);

        $class->update($validatedData);

        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        // dd($class);
        Classe::find($id)
        ->delete();
        return $this->index();

    }

    public function showDeleted(){
        $classes=Classe::onlyTrashed()->get();
        return view('trashedClasses',compact('classes'));
    }
    public function forceDelete(String $id){
        Classe::find($id)
        ->forceDelete();
        return $this->showDeleted();
    }
    public function restore(Classe $class){
       
        // dd("safaa");
        $class->withTrashed()
        ->restore();
        return redirect()->route('classes.deleted');
    }
}
