<?php

use App\Http\Controllers\GebruikerController;
use App\Http\Controllers\EvenementController;
use App\Http\Controllers\TicketController;
Use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::middleware(['web'])->group(function () {
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
        Route::put('/gebruiker/update/{id}', [GebruikerController::class, 'update'])->name('update');
        Route::post('/gebruiker/authenticate', [GebruikerController::class, 'authenticate'])->name('authenticate');
        Route::get('/gebruiker/delete/{id}', [GebruikerController::class, 'delete'])->name('delete');
        Route::post('/gebruiker/logout', function () {
            Auth::logout();
            return redirect()->route('gebruiker.home');
        })->name('logout');
    });

    Route::name("events.")->group(function () {
        Route::get('/events/home', [EvenementController::class, 'home'])->name('home');
        Route::get('/events/index', [EvenementController::class, 'index'])->name('index');
        Route::get('/events/create', [EvenementController::class, 'create'])->name('create');
        Route::get('/events/edit/{id}', [EvenementController::class, 'edit'])->name('edit');
        Route::post('/events/store', [EvenementController::class, 'store'])->name('store');
    });

    Route::name("tickets.")->group(function () {
        Route::get('/tickets/index', [TicketController::class, 'index'])->name('index');
        Route::get('/tickets/create', [TicketController::class, 'create'])->name('create');
        Route::post('/tickets/store', [TicketController::class, 'store'])->name('store');
        Route::get('/tickets/edit/{id}', [TicketController::class, 'edit'])->name('edit');
        Route::put('/tickets/update/{id}', [TicketController::class, 'update'])->name('update');
        Route::get('/tickets/delete/{id}', [TicketController::class, 'delete'])->name('delete');
    });
});