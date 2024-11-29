<?php

use App\Http\Controllers\ClientsController; // Alterando para o novo controlador
use Illuminate\Support\Facades\Route;

// Routes Clients
Route::get('/', [ClientsController::class, 'index'])->name('clients.index');
Route::get('/create', [ClientsController::class, 'create'])->name('clients.create');
Route::post('/store', [ClientsController::class, 'store'])->name('clients.store');
Route::get('/edit/{client}', [ClientsController::class, 'edit'])->name('clients.edit');
Route::put('/update/{client}', [ClientsController::class, 'update'])->name('clients.update');
Route::delete('/destroy/{client}', [ClientsController::class, 'destroy'])->name('clients.destroy');
