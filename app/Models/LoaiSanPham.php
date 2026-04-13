<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LoaiSanPham extends Model
{
    protected $table = 'loaisanpham';
    protected $fillable = ['tenLoai', 'moTa'];
}
