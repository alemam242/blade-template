<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});



/**
  *?Dashboard Route 
*/

Route::group(['prefix'=>'admin'], function () {
    Route::get('/home',[DashboardController::class,'home'])->name('home');
    Route::get('/tasks',[DashboardController::class,'task_list'])->name('tasks.list');
});