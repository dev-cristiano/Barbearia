<?php

use App\Http\Controllers\Api\v1\EmployeeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\V1\ServiceController;
use App\Http\Controllers\Api\V1\EnterpriseController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/services', [ServiceController::class, 'store'])->name('services.store');

Route::post('/enterprises/store', [EnterpriseController::class, 'store'])->name('enterprises.store');
Route::put('/enterprises/{enterprise}', [EnterpriseController::class, 'update'])->name('enterprises.update');

Route::post('/employees', [EmployeeController::class, 'store'])->name('employees.store');
