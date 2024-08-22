<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;


  
Route::prefix('car')->middleware('verified')->group(
    function(){
        Route::get('',[CarController::class,'index'])->name('car.index');
        Route::post('',[CarController::class,'store'])->name('car.store');
        Route::get('create',[CarController::class,'create'])->name('car.create');
        Route::get('deleted',[CarController::class,'showDeleted'])->name('cars.deleted');
        Route::get('{car}',[CarController::class,'show'])->name('car.show');
        Route::put('{car}',[CarController::class,'update'])->name('car.update');
        Route::delete('{car}',[CarController::class,'destroy'])->name('car.destroy');//soft delete
        Route::patch('{car}', [CarController::class, 'restore'])->name('car.restore');
        Route::get('{car}/edit',[CarController::class,'edit'])->name('car.edit');
        Route::delete('{car}/perminant',[CarController::class,'perminantDelete'])->withTrashed()->name('car.perminantDelete');
        Route::patch('{car}/restore',[CarController::class,'restore'])->withTrashed()->name('car.restore');
    }    
);