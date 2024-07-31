<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ExambleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('start');



// Route::prefix('accounts')->group(
//     function(){
//         Route::get('',function(){
//             return "accounts ";
//         });
//         Route::get('/admin',function(){
//             return "accounts admin ";
//         });
//         Route::get('/user',function(){
//             return "accounts user ";
//         });

//     }
// );
// Route::prefix('cars')->group(
//     function(){
       
//         Route::prefix('usa')->group(
//             function(){
//                 Route::get('/ford',function(){
//                     return "cars usa ford ";
//                 });
//                 Route::get('/tesla',function(){
//                     return "cars usa tesla ";
//                 });
        
//             }
//         );

//         Route::prefix('ger')->group(
//             function(){
//                 Route::get('/mercedes',function(){
//                     return "cars ger mercedes ";
//                 });
//                 Route::get('/audi',function(){
//                     return "cars ger audi ";
//                 });
//                 Route::get('/volkswagen',function(){
//                     return "cars ger volkswagen ";
//                 });
        
//             }
//         );

//     }
// );


Route::get('login',[ExambleController::class,'login'])->name('login');
Route::post('loginPost',[ExambleController::class,'loginPost'])->name('loginPost');
Route::get('image',[ExambleController::class,'imageForm'])->name('imageForm');
Route::post('image',[ExambleController::class,'image'])->name('image');

Route::get('contact',[ContactController::class,'contact'])->name('contact');
Route::post('contactPost',[ContactController::class,'contactPost'])->name('contactPost');


//cars
Route::prefix('car')->group(
    function(){
        Route::get('',[CarController::class,'index'])->name('car.index');
        Route::post('',[CarController::class,'store'])->name('car.store');
        Route::get('create',[CarController::class,'create'])->name('car.create');
        Route::get('deleted',[CarController::class,'showDeleted'])->name('cars.deleted');
        Route::get('{id}',[CarController::class,'show'])->name('car.show');
        Route::put('{id}',[CarController::class,'update'])->name('car.update');
        Route::delete('{id}',[CarController::class,'destroy'])->name('car.destroy');//soft delete
        Route::patch('{id}', [CarController::class, 'restore'])->name('car.restore');
        Route::get('{id}/edit',[CarController::class,'edit'])->name('car.edit');
        Route::delete('{id}/perminant',[CarController::class,'perminantDelete'])->name('car.perminantDelete');
    }    
);    



Route::prefix('class')->group(
    function(){
        Route::get('', [ClassController::class, 'index'])->name('class.index');
        Route::post('', [ClassController::class, 'store'])->name('class.store');
        Route::get('create', [ClassController::class, 'create'])->name('class.create');
        Route::get('deleted',[ClassController::class,'showDeleted'])->name('classes.deleted');
        Route::get('{class}', [ClassController::class, 'show'])->name('class.show');
        Route::put('{class}', [ClassController::class, 'update'])->name('class.update');
        Route::delete('{class}', [ClassController::class, 'destroy'])->name('class.destroy');
        Route::get('{class}/edit', [ClassController::class, 'edit'])->name('class.edit'); 
        Route::patch('{class}/restore',[ClassController::class,'restore'])->withTrashed()->name('class.restore');
        Route::delete('{class}/forceDelete',[ClassController::class,'forceDelete'])->withTrashed()->name('class.forceDelete');
    }
);





