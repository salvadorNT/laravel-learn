<?php

use App\Http\Controllers\PageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/**
 * 
 Route::get('/', [PageController::class, 'home'] )->name('home');
 
 Route::get('blog', [PageController::class, 'blog'])->name('blog');
 
 Route::get('blog/{slug}', [PageController::class, 'post'])->name('post');
 */


Route::controller(PageController::class)->group(function () {

    Route::get('/', 'home')->name('home');

    Route::get('blog', 'blog')->name('blog');

    Route::get('blog/{slug}', 'post')->name('post');
    
    Route::get('test/', 'test')->name('test');

    Route::get('contact', 'contact')->name('contact');
    
    Route::resource('user', PageController::class);



});
