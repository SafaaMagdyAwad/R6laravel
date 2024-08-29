<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ExambleController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\SocialController;
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
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ //...

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
    });

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('auth/{driver}/redirect',[SocialController::class,'redirect'])->name('socialLink');

Route::get('auth/{driver}/callback',[SocialController::class,'callback']);
