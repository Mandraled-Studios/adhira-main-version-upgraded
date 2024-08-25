<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\DuedateController;
use App\Http\Controllers\EnquiryController;

Auth::routes();

Route::get('/', [PagesController::class, 'index'])->name('landing');
Route::get('/clients', [PagesController::class, 'clients'])->name('clients');
Route::get('/calculator', [PagesController::class, 'calculator'])->name('calculator');

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::patch('/admin/{id}', [HomeController::class, 'statusChange'])->name('admin-status');

Route::resource('/due-dates', DuedateController::class, [
    'names' => 'due-dates'
]);
Route::resource('/whats-new', NewsController::class, [
    'names' => 'whats-new'
]);
Route::resource('/enquiries', EnquiryController::class, [
    'names' => 'enquiries'
]);

