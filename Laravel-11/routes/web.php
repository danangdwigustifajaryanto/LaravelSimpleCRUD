<?php

use Illuminate\Support\Facades\Route;

//Tambahkan ini agar bisa menggunakan MessageController
use App\Http\Controllers\MessageController;

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


Route::get('/', function () {
    return view('helloworld'); //Ubah sesuka hati
});


//Mengirim dan meminta data dari Database untuk di tampilkan
Route::get('/messages', [MessageController::class, 'index']);
Route::post('/messages', [MessageController::class, 'store']);

// Tampilkan form edit
Route::get('/messages/{id}/edit', [MessageController::class, 'edit']);
// Update data hasil edit
Route::put('/messages/{id}', [MessageController::class, 'update']);
// Delete data
Route::delete('/messages/{id}', [MessageController::class, 'destroy']);

