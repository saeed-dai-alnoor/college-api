<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/students', [StudentController::class, 'index']);

Route::post('/students', [StudentController::class, 'create']);

Route::put('/students/{student}', [StudentController::class, 'edit']);

Route::delete('/students/{student}',[StudentController::class, 'destroy']);

Route::post('/student-login', [StudentController::class, 'login']);

