<?php

use App\Http\Controllers\RouteController;
use App\Livewire\FormUser;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('livewire.welcome-user');
});

// Route::get('/form', [RouteController::class,'RedirectForm'])->name('form');

// Route::get('/formUser', FormUser::class);

Route::get('/form', function () {
    return view('formLayout');
})->name('form');

