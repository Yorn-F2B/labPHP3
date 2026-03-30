<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tin extends Model
{
    protected $table = 'tin';
    protected $primaryKey = 'idTin';
    public $timestamps = true;

    protected $fillable = ['tieuDe', 'tomTat', 'urlHinh', 'idLT'];
}
