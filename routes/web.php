<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::controller(TaskController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/edit/{task}', 'show');
    Route::get('/create', 'create');
    Route::post('/create', 'store');
    Route::patch('/edit/{task}', 'edit');
    Route::delete('/delete/{task}', 'destroy');
});
