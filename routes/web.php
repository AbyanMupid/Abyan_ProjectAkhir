<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

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

// Route::get('basic_elements', function () {
//     return view('basic_elements');
// });
// Route::get('basic-table', function () {
//     return view('basic-table');
// });
// Route::get('chartjs', function () {
//     return view('chartjs');
// });
// Route::get('login', function () {
//     return view('login');
// });
// Route::get('mdi', function () {
//     return view('mdi');
// });
// Route::get('register', function () {
//     return view('register');
// });

Route::get('kelas',[AdminController::class,'kelas']);
Route::get('petugas',[AdminController::class,'petugas']);
Route::get('index',[AdminController::class,'index']);
Route::get('siswa',[AdminController::class,'siswa']);
Route::get('tambahpetugas',[AdminController::class,'tambahpetugas']);