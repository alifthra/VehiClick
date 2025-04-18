<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListBarangController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/AplikasiRentalKendaraan', function () {
    return view('styles');
});

Route::get('/Cowok3D', function () {
    return view('styles2');
});

?>