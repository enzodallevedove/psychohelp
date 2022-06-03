<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PsychologistController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::controller(AuthController::class)->prefix('auth')->group(function () {
    Route::post('login', 'login');
    Route::post('register', 'register');
    Route::post('logout', 'logout');
    Route::post('refresh', 'refresh');
    Route::post('me', 'me');
});

// Route::controller(PsychologistController::class)->group(function() {
//     Route::get('psychologists', 'index');
//     Route::get('psychologists/{psychologist}', 'show');
//     Route::post('psychologists', 'store');
//     Route::put('psychologists/{psychologist}', 'update');
//     Route::delete('psychologists/{psychologist}', 'delete');
// });