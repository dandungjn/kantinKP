<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detailTransaksi extends Model
{
          protected $fillable = ['user_id','id_transaksi','nama_makanan','jumlah_makanan','harga_makanan','total_harga'];
}
