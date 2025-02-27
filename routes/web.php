<?php

use App\Http\Controllers\GebruikerController;
use App\Http\Controllers\EvenementController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::name("gebruiker.")->group(function(){
    Route::get('/gebruiker/home',[GebruikerController::class,'home'])->name('home');
    Route::get('/gebruiker/register',[GebruikerController::class,'register'])->name('register');
    Route::post('/gebruiker/store',[GebruikerController::class,'store'])->name('store');
    Route::get('/gebruiker/login',[GebruikerController::class,'login'])->name('login');
    Route::post('/gebruiker/authenticate',[GebruikerController::class,'authenticate'])->name('authenticate');
});

Route::name("events.")->group(function(){
    Route::get('/events/home',[EvenementController::class,'home'])->name('home');
    Route::get('/events/index',[EvenementController::class,'index'])->name('index');
    Route::get('/events/create',[EvenementController::class,'create'])->name('create');
});
