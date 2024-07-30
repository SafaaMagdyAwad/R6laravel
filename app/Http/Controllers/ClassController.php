<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    //
    private $newClassController;
    public function __construct(){
        $this->newClassController=new NewClassController;
    }
    public function forceDelete(String $id){
        // dd("force delete".$id);
        $class=Classe::withTrashed()->find($id);
        // dd($class);
        if($class){
            $class->forceDelete();
        }
        return $this->newClassController->showDeleted();
    }
    public function restore(String $id){
        // dd($id);  //output 1
        $class=Classe::withTrashed()->find($id);
        // $safaa=$class->withTrashed();
        // dd($safaa); //output null
        if($class){
            $class->restore();
        }
        return $this->newClassController->showDeleted();
    }
}
