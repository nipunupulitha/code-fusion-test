<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/user', [UserController::class, 'Users'])->name('user');
Route::get('/order', [UserController::class, 'Orders'])->name('order'); //route relevent to orders function
Route::get('/property', [UserController::class, 'Property'])->name('property'); //route relevent to property function
Route::get('/property_aminity', [UserController::class, 'Property_aminities'])->name('property_aminity'); //route relevent to property_aminities function


