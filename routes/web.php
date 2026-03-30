<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TinController;

Route::get('/', [TinController::class, 'index']);

// Bài 1: Danh sách tin
Route::get('/tin', [TinController::class, 'index']);

// Bài 2: Thêm tin
Route::get('/tin/them', [TinController::class, 'them']);
Route::post('/tin/them', [TinController::class, 'luuTin']);

// Bài 3: Xóa tin
Route::get('/tin/xoa/{id}', [TinController::class, 'xoa']);

// Bài 3: Cập nhật tin
Route::get('/tin/capnhat/{id}', [TinController::class, 'capnhat']);
Route::post('/tin/capnhat/{id}', [TinController::class, 'luuCapNhat']);
