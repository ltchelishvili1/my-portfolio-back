<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/user', function (Request $request) {
	return $request->user();
})->middleware('auth:sanctum');

Route::prefix('/custom/')->group(function () {
	Route::post('register', [RegisterController::class, 'register'])->name('register');
});
