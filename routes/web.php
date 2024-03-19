<?php

use App\Http\Controllers\RouteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('livewire.welcome-user');
});

Route::get('/form', [RouteController::class,'RedirectForm'])->name('form');

