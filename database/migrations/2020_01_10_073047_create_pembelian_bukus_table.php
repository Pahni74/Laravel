<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembelianBukusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembelian_bukus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('judul_buku')->nullable();
            $table->string('nama_pembeli')->nullable();
            $table->integer('harga_buku')->nullable();
            $table->string('waktu_pembelian')->nullable();
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
        Schema::dropIfExists('pembelian_bukus');
    }
}
