<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class daftarMakanan extends Model
{
    protected $fillable = ['nama_makanan','harga_makanan','gambar_makanan','stok_makanan','nama_supplier'];
}
