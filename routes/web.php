<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ReportsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about',function(){
   return view('about');
});

Route::get('/services', [PagesController::class,'services']);

Route::resource('reports',ReportsController::class);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
