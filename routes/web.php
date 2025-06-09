<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\V1\ServiceController;
use App\Http\Controllers\Api\V1\SchedulingController;
use App\Http\Controllers\Api\V1\EmployeeController;
use App\Http\Controllers\Api\V1\ClientController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Serviços
    Route::get('/services', [ServiceController::class, 'index'])->name('services.index');

    // Funcionários
    Route::get('/employees', [EmployeeController::class, 'index'])->name('employees.index');

    // Clientes
    Route::get('/clients', [ClientController::class, 'index'])->name('clients.index');

    // Agendamentos
    Route::get('/schedulings', [SchedulingController::class, 'index'])->name('schedulings.index');
});

require __DIR__.'/auth.php';
