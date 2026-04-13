<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\LoaiSanPhamController;

// Bài 1 + 2: Products CRUD
Route::apiResource('products', ProductController::class);

// Bài 3: LoaiSanPham CRUD
Route::apiResource('loaisanpham', LoaiSanPhamController::class);
