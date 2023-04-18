<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HiresController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\SpecialitiesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get ("/",[HomeController::class ,'home'])->name('home');
Route::get ("signout",[UsersController::class ,'signout']);
Route::post ("register",[UsersController::class ,'signup']);
Route::post ("login",[UsersController::class ,'signin']);
Route::get ("community",[UsersController::class ,'community']);


Route::middleware(['auth', 'Admin'])->group(function () {
    Route::get('admin', [UsersController::class, 'dashboard']);
    Route::post ("addSpeciality",[SpecialitiesController::class ,'store']);
    Route::get ("deletes/{id}",[SpecialitiesController::class ,'delete']);
});

Route::middleware(['auth', 'Client'])->group(function () {
    Route::get ("repairmanprofile/{id}",[UsersController::class ,'repairman_profile']);
    Route::get ("hire",[HiresController::class ,'index']);
    Route::post ("store",[HiresController::class ,'store']);
    Route::get ("profileC",[UsersController::class ,'client_profile']);
    Route::get ("cancel/{id}",[HiresController::class ,'cancel']);
});

Route::middleware(['auth', 'Repairman'])->group(function () {
    Route::get ("profileR",[UsersController::class ,'personal_profile']);
    Route::post ("editprofile",[UsersController::class ,'edit_repair_profile']);
    Route::get ("accept/{id}",[HiresController::class ,'accept']);
    Route::get ("reject/{id}",[HiresController::class ,'reject']);
});