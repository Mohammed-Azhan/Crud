<?php

use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Form');
})->name('Home');

Route::get('/users', [userController::class, 'Display'])->name('Users');
Route::post('/Users/request', [userController::class, 'Create'])->name('Create');
Route::get('/Users/{id}/Edit', [userController::class, 'Edit'])->name('Edit');
Route::post('/Users/{id}/update', [userController::class, 'Update'])->name('Update');
Route::get('/Users/{id}/Delete', [userController::class, 'Destroy'])->name('Delete');
