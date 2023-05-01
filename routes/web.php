<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;


Route::get('/',[HomeController::class,'home'])->name('homepage');
Route::get('/service',[HomeController::class,'serviceMethod'])->name('service');
Route::get('/about',[HomeController::class,'aboutMethod'])->name('about');
Route::get('/contact',[HomeController::class,'contactMethod'])->name('contact');
Route::get('/blog',[HomeController::class,'blogMethod'])->name('blog');
Route::get('/details',[HomeController::class,'detailsMethod'])->name('details');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
