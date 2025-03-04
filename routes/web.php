<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('customer/trash', [CustomerController::class, 'trashIndex'])->name('customers.trash');
Route::get('customer/restore/{customer}', [CustomerController::class, 'restore'])->name('customers.restore');
Route::delete('customer/trash/{customer}', [CustomerController::class, 'forceDestroy'])->name('customers.force.destroy');

Route::resource('customers', CustomerController::class);
