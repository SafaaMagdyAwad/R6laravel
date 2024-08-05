<?php

namespace App\Http\Controllers;

use App\common;
use App\Models\Classe;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    use common;
    
    
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
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'capacity' => 'required|integer',
            'price' => 'required|decimal:0,3',
            'timeFrom' => 'required',
            'timeTo' => 'required|after:timeFrom',
        ]);
        // dd($request->all());
        $validatedData['isFulled']=isset($request->isFulled);
        $image_name= !isset($request->image)?"null":$this->upload_file($request->image ,'assets/images');
        
        // dd($image_name);

       $validatedData['image']=$image_name;
    //    dd($validatedData);
        //create
        Classe::create($validatedData);
        //return
        return redirect()->route('class.index');

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
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'capacity' => 'integer',
            'price' => 'decimal:0,3',
            'timeTo' => 'after:timeFrom',
            'isFulled' => 'boolean',
        ]);
       $validatedData['timeFrom']=$request->timeFrom;
       // dd($validatedData);
       $image_name=$request->hasFile('image')?$this->upload_file($request->image,'assets/images'):$request->old_image;
    //    dd($request->hasFile('image'));
       $validatedData['image']=$image_name;
        $class->update($validatedData);
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
        $classes=Classe::onlyTrashed()->get();
        return view('trashedClasses',compact('classes'));
    }
    public function forceDelete(Classe $class){
        // $class=Classe::withTrashed()->find($id);
        // dd($class);
        if($class){
            $class->forceDelete();
        }
        return redirect()->route('classes.deleted');
    }
    public function restore(Classe $class){
        // dd($id);  //output 1
        // $class=Classe::withTrashed()->find($id);
        
        if($class){
            $class->restore();
        }
        return redirect()->route('classes.deleted');
    }
   
}
