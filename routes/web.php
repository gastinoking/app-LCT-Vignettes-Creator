<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

//    return view('welcome');
    return view('administration.login');
});

Auth::routes();


Route::group(['middleware' =>[ 'auth:web','isadministration'],'prefix' => 'administration','as' => "administration."], function () {
//    Route::get('products',[App\Http\Controllers\Admin\ProductController::class,'index'])->name('product.index');
    Route::get('/dashboard',[\App\Http\Controllers\Administration\VignetteContoller::class,'dashboard'])->name('dashboard');
    Route::resource('/vignettes',\App\Http\Controllers\Administration\VignetteContoller::class);


    Route::get('/print/{id}',[\App\Http\Controllers\Administration\VignetteContoller::class,'print'])->name('print') ;
    Route::get('/print-all',[\App\Http\Controllers\Administration\VignetteContoller::class,'printAll'])->name('print-all') ;



});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



