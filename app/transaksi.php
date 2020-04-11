<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
        protected $fillable = ['total_harga','dibayar','kembalian'];

}
