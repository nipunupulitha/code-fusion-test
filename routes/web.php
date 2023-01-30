<?php

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
Route::get('/index', [UserController::class, 'Users'])->name('index');
Route::get('/index1', [UserController::class, 'Orders'])->name('index1'); //route relevent to orders function
Route::get('/index2', [UserController::class, 'Property'])->name('index2'); //route relevent to property function
Route::get('/index3', [UserController::class, 'Property_aminities'])->name('index3'); //route relevent to property_aminities function


