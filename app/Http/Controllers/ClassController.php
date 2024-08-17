<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ClassController extends BaseController
{
  
    protected string $filesPath = "assets/images/class";
    protected string $model = Classe::class;
    protected string $relationModel = '';
    protected string $relations = '';

    public function __construct() {
        $this->columns = (new Classe())->getFillable();
    } 
   
    public function store(Request $request):RedirectResponse
    {
        $validatedData = $request->validate([
            'className' => 'required|string|max:50',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'capacity' => 'required|integer',
            'price' => 'required|decimal:0,3',
            'timeFrom' => 'required',
            'timeTo' => 'required|after:timeFrom',
        ]);
        // dd($request->all());
        $validatedData['isFulled']=isset($request->isFulled);

    return $this->store($request);
    }
    public function update(Request $request , String $id):RedirectResponse
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

    return $this->update($request,$id);
    }

   

    
  
  
    public function showDeleted(){
        $classes=Classe::onlyTrashed()->get();
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
