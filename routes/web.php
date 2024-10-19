<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/test-db', function () {
    try {
        DB::connection()->getPdo();
        return 'Koneksi ke database berhasil!';
    } catch (\Exception $e) {
        return 'Koneksi ke database gagal: ' . $e->getMessage();
    }
});
