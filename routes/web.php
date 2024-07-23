<?php

use App\Http\Controllers\tasksController;
use Illuminate\Support\Facades\Route;

//Routes tasks 
Route::get('/', [tasksController::class, 'index'])->name('tasks.index');
Route::get('/create', [tasksController::class, 'create'])->name('tasks.create');
Route::post('/store', [tasksController::class, 'store'])->name('tasks.store');
Route::get('/edit/{task}', [tasksController::class, 'edit'])->name('tasks.edit');
Route::put('/update/{task}', [tasksController::class, 'update'])->name('tasks.update');
Route::delete('/destroy/{task}', [tasksController::class, 'destroy'])->name('tasks.destroy');
