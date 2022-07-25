<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WorkoutController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('home');
});


// User profile
Route::get('/user',[UserController::class, 'index'])->name('user.index');

//workout
Route::get('/workout',[WorkoutController::class, 'create'])->name('workout.create');
Route::post('/workout/add-exercise',[WorkoutController::class, 'add'])->name('workout.add');
Route::post('/workout/store',[WorkoutController::class, 'store'])->name('workout.store');
