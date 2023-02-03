<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;



// INDEX
Route::get('/', [MainController::class,'home'])
    -> name('home');
// DELETE
Route::get('/saint/destroy/{id}', [MainController::class,'saintDestroy'])
    -> name('saint.destroy');
// CREATE
Route::get('/saint/create', [MainController::class,'saintCreate'])
    -> name('saint.create');

Route::post('saint.store', [MainController::class,'saintStore'])
    -> name('saint.store');