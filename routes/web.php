<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;


Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/team', [PageController::class, 'team'])->name('team');

Route::get('/contact', [PageController::class, 'contact'])->name('contact');


// Route::get('/contact', [PageController::class, 'contact'])->name('contact');
