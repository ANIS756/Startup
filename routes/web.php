<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\DashBoardControllr;
use App\Http\Controllers\BlogController;


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
    Route::get('/dashboard', [DashBoardControllr::class,'index'])->name('dashboard');

    Route::get('/Blog/Add', [BlogController::class,'index'])->name('blog.add');
    Route::get('/Blog/manage', [BlogController::class,'manage'])->name('blog.manage');
    Route::post('/Blog/create', [BlogController::class,'create'])->name('blog.create');
    Route::get('/Blog/edit{id}', [BlogController::class,'edit'])->name('blog.edit');
    Route::post('/Blog/update{id}', [BlogController::class,'update'])->name('blog.update');
    Route::get('/Blog/delete{id}', [BlogController::class,'delete'])->name('blog.delete');
});
