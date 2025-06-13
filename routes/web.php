<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\V1\ServiceController;
use App\Http\Controllers\Api\V1\SchedulingController;
use App\Http\Controllers\Api\V1\EmployeeController;
use App\Http\Controllers\Api\V1\ClientController;
use \App\Http\Controllers\Api\V1\EnterpriseController;

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

    // Empresas
    Route::get('/enterprises', [EnterpriseController::class, 'index'])->name('enterprises.index');
    Route::get('/enterprises/create', [EnterpriseController::class, 'create'])->name('enterprises.create');
    Route::get('/enterprises/{id}/edit', [EnterpriseController::class, 'edit'])->name('enterprises.edit');
    Route::delete('/enterprises/{id}', [EnterpriseController::class, 'destroy'])->name('enterprises.destroy');

    // Funcionários
    Route::get('/employees', [EmployeeController::class, 'index'])->name('employees.index');
    Route::get('/employees/create', [EmployeeController::class, 'create'])->name('employees.create');

    // Serviços
    Route::get('/services', [ServiceController::class, 'index'])->name('services.index');

    // Clientes
    Route::get('/clients', [ClientController::class, 'index'])->name('clients.index');

    // Agendamentos
    Route::get('/schedulings', [SchedulingController::class, 'index'])->name('schedulings.index');
});

require __DIR__.'/auth.php';
