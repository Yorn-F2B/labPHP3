<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TinController;
use App\Http\Controllers\QuanTriTinController;

Route::get('/', [TinController::class, 'index']);

// Dashboard sau khi login
Route::get('/dashboard', [TinController::class, 'index'])->middleware('auth')->name('dashboard');

// Lab 5 - Tin
Route::get('/tin', [TinController::class, 'index']);
Route::get('/tin/them', [TinController::class, 'them']);
Route::post('/tin/them', [TinController::class, 'luuTin']);
Route::get('/tin/xoa/{id}', [TinController::class, 'xoa']);
Route::get('/tin/capnhat/{id}', [TinController::class, 'capnhat']);
Route::post('/tin/capnhat/{id}', [TinController::class, 'luuCapNhat']);

// Lab 6 - Bài 2: Hạn chế truy cập qua route middleware
Route::get('/download', function () {
    return view('download');
})->middleware('auth');

// Lab 6 - Bài 2: Hạn chế truy cập trong controller
Route::get('/quantritin', [QuanTriTinController::class, 'index']);

// Lab 6 - Bài 3: Route bảo vệ bằng middleware quantri (chỉ idgroup=1)
Route::get('/quantri', function () {
    return view('quantri');
})->middleware(['auth', 'quantri']);



require __DIR__.'/auth.php';
