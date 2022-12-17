<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama_produk');
            $table->integer('harga')->default(25000);
            $table->integer('stok');
            $table->boolean('is_ready')->default(true);
            $table->string('gambar');
            $table->integer('ongkir')->default(10000);
            $table->string('deskripsi');
            $table->string('kota_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
