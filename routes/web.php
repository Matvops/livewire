<?php

use App\Http\Controllers\MainController;
use App\Livewire\Counter;
use App\Livewire\FullPage;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'home'])->name('home');
Route::get('/clients', [MainController::class, 'clients'])->name('clients');
Route::view('/form', 'form');
Route::get('/full-page', FullPage::class);


/* Route::get('/counter', Counter::class); */
