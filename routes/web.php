<?php

use App\Http\Controllers\AuthController;
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
//     return view('register');
// });

Route::get('/register', [AuthController::class, 'register']);
Route::get('/', [AuthController::class, 'login']);
Route::post('/simpanuser', [AuthController::class, 'simpanuser']);
Route::post('/ceklogin', [AuthController::class, 'ceklogin']);