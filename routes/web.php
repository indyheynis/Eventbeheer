<?php

use App\Http\Controllers\GebruikerController;
use App\Http\Controllers\EvenementController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::name("gebruiker.")->group(function () {
    Route::get('/gebruiker/home', [GebruikerController::class, 'home'])->name('home');
    Route::get('/gebruiker/register', [GebruikerController::class, 'register'])->name('register');
    Route::post('/gebruiker/store', [GebruikerController::class, 'store'])->name('store');
    Route::get('/gebruiker/login', [GebruikerController::class, 'login'])->name('login');
    Route::get('/gebruiker/dashboard', [GebruikerController::class, 'dashboard'])->name('dashboard');
    Route::get('/gebruiker/edit/{id}', [GebruikerController::class, 'edit'])->name('edit');
    Route::get('/gebruiker/delete/{id}', [GebruikerController::class, 'delete'])->name('delete');
    Route::post('/gebruiker/update/{id}', [GebruikerController::class, 'update'])->name('update');
    Route::post('/gebruiker/authenticate', [GebruikerController::class, 'authenticate'])->name('authenticate');
});

Route::name("events.")->group(function () {
    Route::get('/events/home', [EvenementController::class, 'home'])->name('home');
    Route::get('/events/index', [EvenementController::class, 'index'])->name('index');
    Route::get('/events/create', [EvenementController::class, 'create'])->name('create');
});
