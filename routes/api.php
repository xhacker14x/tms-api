<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('get', [TaskController::class, 'getTask']);
Route::post('create', [TaskController::class, 'createTask']);
Route::delete('delete/{id}', [TaskController::class, 'deleteTask']);
Route::get('update/{id}', [TaskController::class, 'updateTask']);
Route::put('update/{id}', [TaskController::class, 'updateNow']);