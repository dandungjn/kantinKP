<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class keranjang extends Model
{
    protected $fillable = ['id_makanan','nama_makanan','harga_makanan','jumlah_makanan','stok_makanan','total_harga'];
}

