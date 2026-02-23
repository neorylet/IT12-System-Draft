<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Authentication  Module
Route::view('/login', 'auth.login');
Route::post('/login', function (Request $request) {
    // Temporarily just return input for testing
    return $request->all();
})->name('login');

Route::view('/register', 'auth.register');



// Admin  Routes
Route::view('/dashboard', 'admin.index');
Route::view('/renters', 'admin.renters');
Route::view('/shelves', 'admin.shelves');
Route::view('/inventory', 'admin.inventory');
Route::view('/audit-logs', 'admin.audit-logs');

// Renters  Routes
Route::view('/myshelf', 'renter.myshelf')->name('myshelf');
Route::view('/inventoryrqst', 'renter.inventoryrqst')->name('inventoryrqst');


// Staff  Routes
Route::view('/sdashboard', 'staff.index')->name('staff.dashboard');

