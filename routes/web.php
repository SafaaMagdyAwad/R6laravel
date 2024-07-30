<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\ClassController;
// use App\Http\Controllers\ClassController;
// use App\Http\Controllers\ContactController;
// use App\Http\Controllers\ExambleController;
use App\Http\Controllers\NewClassController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



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


// Route::get('login',[ExambleController::class,'login'])->name('login');
// Route::post('loginPost',[ExambleController::class,'loginPost'])->name('loginPost');

// Route::get('contact',[ContactController::class,'contact'])->name('contact');
// Route::post('contactPost',[ContactController::class,'contactPost'])->name('contactPost');


//cars

// Route::get('car',[CarController::class,'index'])->name('cars');

// Route::get('car/{id}',[CarController::class,'show'])->name('car.show');

// Route::get('createCar',[CarController::class,'create'])->name('car.create');
// Route::post('car/store',[CarController::class,'store'])->name('car.store');

// Route::get('car/{id}/edit',[CarController::class,'edit'])->name('car.edit');
// Route::put('car/{id}',[CarController::class,'update'])->name('car.update');

// Route::delete('car/{id}',[CarController::class,'destroy'])->name('car.destroy');//soft delete


// Route::get('deletedCars',[CarController::class,'showDeleted'])->name('cars.deleted');
// Route::delete('car/{id}/perminant',[CarController::class,'perminantDelete'])->name('car.perminantDelete');
// Route::patch('car/{id}', [CarController::class, 'restore'])->name('car.restore');


//classes

// Route::get('class',[NewClassController::class,'index'])->name('class.index');

// Route::get('class/{id}',[NewClassController::class,'show'])->name('class.show');

// Route::get('class/create',[NewClassController::class,'create'])->name('class.create');
// Route::post('class',[NewClassController::class,'store'])->name('class.store');

// Route::get('class/{id}/edit',[NewClassController::class,'edit'])->name('class.edit');
// Route::put('class/{id}',[NewClassController::class,'update'])->name('class.update');
// Route::delete('class/{id}',[NewClassController::class,'destroy'])->name('class.destroy');

Route::resource('class',NewClassController::class);

Route::get('deletedClasses',[NewClassController::class,'showDeleted'])->name('classes.deleted');

Route::delete('class/{id}/forceDelete',[NewClassController::class,'forceDelete'])->name('class.forceDelete');

Route::patch('class/{id}/restore',[NewClassController::class,'restore'])->name('class.restore');