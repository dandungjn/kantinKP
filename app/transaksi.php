<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
        protected $fillable = ['user_id','total_harga','dibayar','kembalian','diambil'];

}
