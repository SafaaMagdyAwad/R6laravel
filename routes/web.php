<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ExambleController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PublicController;
use App\Http\Middleware\Owner;
use Illuminate\Auth\Middleware\EnsureEmailIsVerified;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('start');


Route::get('image',[ExambleController::class,'imageForm'])->name('imageForm');
Route::post('image',[ExambleController::class,'image'])->name('image');



Route::get('contact',[ContactController::class,'contact'])->name('contact');
Route::post('contactPost',[ContactController::class,'contactPost'])->name('contactPost');








Route::prefix('class')->name('class')->middleware(Owner::class)->group(function () {
    Route::controller(ClassController::class)->group(function () {
        Route::get('', 'index')->name('.index');
        Route::post('',  'store')->name('.store');
        Route::get('create', 'create')->name('.create');
        Route::get('deleted', 'showDeleted')->name('.deleted');
        Route::get('{class}', 'show')->name('.show');
        Route::put('{class}', 'update')->name('.update');
        Route::delete('{class}', 'destroy')->name('.destroy');
        Route::get('{class}/edit', 'edit')->name('.edit');
        Route::patch('{class}/restore', 'restore')->withTrashed()->name('.restore');
        Route::delete('{class}/forceDelete', 'forceDelete')->withTrashed()->name('.forceDelete');
    });
}); //only user whoes name is owner is allowed to in







Route::resource('product',ProductController::class);// admin functions


Route::get('index',[PublicController::class,'index'])->name('public.index');
Route::get('about',[PublicController::class,'about'])->name('public.about');
Route::get('products',[PublicController::class,'products'])->name('public.products');


Route::get('faq',[PublicController::class,'faq'])->name('public.faq');
// Route::get('contact',[PublicController::class,'contact'])->name('public.contact');

Route::get('product/{product}/detail',[PublicController::class,'productDetail'])->name('public.productDetail');
Route::get('like/{product}',[PublicController::class,'like'])->name('public.like');


Route::get('test',[PublicController::class,'test']);



// Route::get('/download', function (Illuminate\Http\Request $request) {
//     $file = $request->input('file');
//     $path = public_path('assets/images/' . $file);
//     if (file_exists($path)) {
//         return response()->download($path);
//     } else {
//         abort(404, 'File not found');
//     }
// }); ifpath starts with .../assets/images

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
