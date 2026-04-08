<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TinController;
use App\Http\Controllers\QuanTriTinController;

Route::get('/', [TinController::class, 'index']);

Route::get('/dashboard', [TinController::class, 'index'])->name('dashboard');

// Lab 5 - Tin
Route::get('/tin', [TinController::class, 'index']);
Route::get('/tin/them', [TinController::class, 'them']);
Route::post('/tin/them', [TinController::class, 'luuTin']);
Route::get('/tin/xoa/{id}', [TinController::class, 'xoa']);
Route::get('/tin/capnhat/{id}', [TinController::class, 'capnhat']);
Route::post('/tin/capnhat/{id}', [TinController::class, 'luuCapNhat']);

// Lab 6
Route::get('/download', function () { return view('download'); })->middleware('auth');
Route::get('/quantritin', [QuanTriTinController::class, 'index']);
Route::get('/quantri', function () { return view('quantri'); })->middleware(['auth', 'quantri']);
Route::get('/thoat', function () {
    auth()->logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/login');
});

// Lab 7
Route::get('hs', [App\Http\Controllers\HsController::class, 'hs']);
Route::post('hs', [App\Http\Controllers\HsController::class, 'hs_store'])->name('hs_store');
Route::get('sv', [App\Http\Controllers\SvController::class, 'sv']);
Route::post('sv', [App\Http\Controllers\SvController::class, 'sv_store'])->name('sv_store');
Route::get('guimail', function () {
    \Illuminate\Support\Facades\Mail::to('nguoinhan@gmail.com')->send(new \App\Mail\GuiMail());
    return 'Gui mail thanh cong!';
});

require __DIR__.'/auth.php';
