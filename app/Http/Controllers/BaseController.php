<?php

namespace App\Http\Controllers;

use App\Common;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    //
    use Common;
    private $imgRoute;
    public function __construct(){
        $this->imgRoute='assets/images/';
    }
    public function baseCarValidation($request,$img){
        $validatedData = $request->validate([
            'carTitle' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'image' => $img.'|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'discription' => 'required|string',
            'price' => 'required|decimal:0,2',
        ]);
        $validatedData['published']=isset($request->published); 
        return $validatedData;
    }
    public function baseClassValidation($request,$img){
        $validatedData = $request->validate([
            'className' => 'required|string|max:50',
            'image' => $img.'|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'capacity' => 'required|integer',
            'price' => 'required|decimal:0,3',
            'timeFrom' => 'required',
            'timeTo' => 'required|after:timeFrom',
        ]);
        // dd($request->all());
        $validatedData['isFulled']=isset($request->isFulled);
        return $validatedData;
    }

    public function getAll($model){
        return $model::all();
    }
    
    public function baseCreate($model,$validatedData){
        return $model::create($validatedData);
    }

    public function baseStore($request,$model,$object){
         if($object=="car"){
            $validatedData=$this->baseCarValidation($request,'required');
        }elseif($object=="class"){
            $validatedData=$this->baseClassValidation($request,'required');
        }
         $validatedData['image']=$this->upload_file($request->image ,$this->imgRoute.$object);

         $this->baseCreate($model,$validatedData);
    }

    public function baseUpdate($request,$updated_item,$object){
        if($object=="car"){
            $validatedData=$this->baseCarValidation($request,'nullable');
        }elseif($object=="class"){
            $validatedData=$this->baseClassValidation($request,'nullable');
        }
        $validatedData['image']=$request->hasFile('image')?$this->upload_file($request->image,$this->imgRoute.$object):$request->old_image;
        $updated_item->update($validatedData);
    }
    public function baseDelete($element){
        $element->delete();
    }
    public function baseDeleted($model){
        return $model::onlyTrashed()->get();
    }

}
