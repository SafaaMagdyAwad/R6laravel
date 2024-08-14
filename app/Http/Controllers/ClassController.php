<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use Illuminate\Http\Request;

class ClassController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classes=Classe::whereNull('deleted_at')->get();
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
        $this->baseStore($request,Classe::class,"class");    // the string is added to diffrenthiate controllers    
        return redirect()->route('class.index');
    }
    /**
     * Display the specified resource.
     */
    public function show(Classe $class)
    {
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
        $this->baseUpdate($request,$class,"class");
        return redirect()->route('class.index');
    } 
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Classe $class)
    {
        $class->delete();
        return redirect()->route('class.index');
    }
    public function showDeleted(){
        $classes=$this->baseDeleted(Classe::class);
        return view('trashedClasses',compact('classes'));
    }
    public function forceDelete(Classe $class){
        if($class){
            $class->forceDelete();
        }
        return redirect()->route('classes.deleted');
    }
    public function restore(Classe $class){
        if($class){
            $class->restore();
        }
        return redirect()->route('classes.deleted');
    }
   
}
