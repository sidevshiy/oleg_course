<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/courses', [\App\Http\Controllers\CousreController::class, 'all'])->name('courses');
Route::get('/courses/{id}', [\App\Http\Controllers\CousreController::class, 'course'])->name('course');

Route::any('adminer', '\Aranyasen\LaravelAdminer\AdminerAutologinController@index');
