<?php

use App\Http\Controllers\ListBarangController;
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

//  Route::get('/listbarang/{id}/{nama}', function ($id, $nama) {
//      return view('list_barang', compact('id', 'nama'));
//  });

Route::get('/listbarang/{id}/{nama}', [ListBarangController::class, 'tampilkan']);