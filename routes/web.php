<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ExambleController;
use App\Http\Controllers\ProductController;
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

// Route::prefix('car')->name('car.')->group(function () {
    //     Route::controller(CarController::class)->group(function () {
        //         Route::get('','index')->name('index');
//         Route::post('','store')->name('store');
//         Route::get('create','create')->name('create');
//         Route::get('deleted','showDeleted')->name('cdeleted');
//         Route::get('{id}','show')->name('show');
//         Route::put('{id}','update')->name('update');
//         Route::delete('{id}','destroy')->name('destroy');//soft delete
//         Route::patch('{id}',  'restore')->name('restore');
//         Route::get('{id}/edit','edit')->name('edit');
//         Route::delete('{id}/perminant','perminantDelete')->name('perminantDelete');
 
//     });
// });

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



// Route::prefix('class')->group(
//     function(){
    //         Route::get('', [ClassController::class, 'index'])->name('class.index');
    //         Route::post('', [ClassController::class, 'store'])->name('class.store');
    //         Route::get('create', [ClassController::class, 'create'])->name('class.create');
    //         Route::get('deleted',[ClassController::class,'showDeleted'])->name('classes.deleted');
    //         Route::get('{class}', [ClassController::class, 'show'])->name('class.show');
    //         Route::put('{class}', [ClassController::class, 'update'])->name('class.update');
    //         Route::delete('{class}', [ClassController::class, 'destroy'])->name('class.destroy');
    //         Route::get('{class}/edit', [ClassController::class, 'edit'])->name('class.edit'); 
    //         Route::patch('{class}/restore',[ClassController::class,'restore'])->withTrashed()->name('class.restore');
    //         Route::delete('{class}/forceDelete',[ClassController::class,'forceDelete'])->withTrashed()->name('class.forceDelete');
//     }
// );

Route::prefix('class')->name('class.')->group(function () {
    Route::controller(ClassController::class)->group(function () {
        Route::get('', 'index')->name('index');
        Route::post('',  'store')->name('store');
        Route::get('create', 'create')->name('create');
        Route::get('deleted', 'showDeleted')->name('deleted');
        Route::get('{class}', 'show')->name('show');
        Route::put('{class}', 'update')->name('update');
        Route::delete('{class}', 'destroy')->name('destroy');
        Route::get('{class}/edit', 'edit')->name('edit');
        Route::patch('{class}/restore', 'restore')->withTrashed()->name('restore');
        Route::delete('{class}/forceDelete', 'forceDelete')->withTrashed()->name('forceDelete');
    });
});







Route::resource('product',ProductController::class);
Route::get('latest',[ProductController::class,'latest'])->name('product.latest');
Route::get('index',[ExambleController::class,'index'])->name('index');
