<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaftarMakanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftar_makanans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_makanan');
            $table->integer('harga_makanan');
            $table->string('gambar_makanan');
            $table->integer('stok_makanan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('daftar_makanans');
    }
}
