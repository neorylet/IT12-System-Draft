<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/login', 'auth.login');
Route::post('/login', function (Request $request) {
    // Temporarily just return input for testing
    return $request->all();
})->name('login');

Route::view('/register', 'auth.register');

Route::view('/dashboard', 'dashboard.index');
Route::view('/renters', 'dashboard.renters');
Route::view('/shelves', 'dashboard.shelves');
Route::view('/inventory', 'dashboard.inventory');
Route::view('/audit-logs', 'dashboard.audit-logs');
