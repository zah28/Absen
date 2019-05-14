<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Toko extends Model
{
    protected $fillable = [
        'namaBrg', 'kodeBrg', 'stok', 'tglMasuk', 'hrgGrosir', 'hrgJual'
    ];
    protected $dates = ['deleted_at'];
}

