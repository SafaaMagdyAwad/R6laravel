<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use Illuminate\Http\Request;

class NewClassController extends Controller
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
    public function show(Classe $class)
    {
        // dd($class);
        return view('class', compact('class'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Classe $class)
    {
        return view('update_class',['class'=>$class]);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Classe $class)
    {
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
    public function destroy(Classe $class)
    {
        $class->delete();
        return $this->index();
    }

    public function showDeleted(){
        $classes=Classe::onlyTrashed()->get();
        return view('trashedClasses',compact('classes'));
    }
    public function forceDelete(Classe $class){
        dd("force delete");
        if($class){
            $class->forceDelete();
        }
        return $this->showDeleted();
    }
    public function restore(Classe $class ){
        dd("restore");
        if($class){
            $class->restore();
        }
        return $this->showDeleted();
    }
}
