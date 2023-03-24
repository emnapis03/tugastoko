<?php

use App\Http\Controllers\kategoriprodukController;
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

Route::get('/', [kategoriprodukController::class, 'index']);

Route::get('/kategori/edit/{id}', [kategoriprodukController::class, 'edit']);

Route::post('/kategori/update/{id}', [kategoriprodukController::class, 'update']);

Route::get('/kategori/create', [kategoriprodukController::class, 'create']);

Route::post('/kategori/simpan', [kategoriprodukController::class, 'store']);

Route::post('/kategori/delete/{id}', [kategoriprodukController::class, 'destroy']);
