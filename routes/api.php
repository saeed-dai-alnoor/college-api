<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/students', [StudentController::class, 'index']);

Route::post('/student', [StudentController::class, 'create']);

Route::put('/student/{student}', [StudentController::class, 'edit']);

Route::delete('/student/{student}',[StudentController::class, 'destroy']);

Route::post('/student-login', [StudentController::class, 'login']);

