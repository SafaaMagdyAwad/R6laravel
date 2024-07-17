<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ExambleController;
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


Route::get('login',[ExambleController::class,'login'])->name('login');
Route::post('loginPost',[ExambleController::class,'loginPost'])->name('loginPost');

Route::get('contact',[ContactController::class,'contact'])->name('contact');
Route::post('contactPost',[ContactController::class,'contactPost'])->name('contactPost');


Route::get('car/create',[CarController::class,'create'])->name('car.create');
Route::post('car/store',[CarController::class,'store'])->name('car.store');


Route::get('class/create',[ClassController::class,'create'])->name('class.create');
Route::post('class/store',[ClassController::class,'store'])->name('class.store');

