<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Inventory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventory', function (Blueprint $table) {
            $table->id();
            $table->string('Nama_User');
            $table->string('Nama_barang');
            $table->integer('Diambil');
            $table->integer('ppn');
            $table->integer('harga_total');
            $table->string('kategori');
            $table->string('alamat');
            $table->string('Lokasi_penyimpanan');
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
        //
    }
}