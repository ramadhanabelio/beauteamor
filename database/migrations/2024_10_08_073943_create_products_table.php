<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('nama_produk');
            $table->enum('jenis_produk', ['Kosmetik', 'Skincare']); // Jenis produk: Kosmetik atau Skincare
            $table->integer('stok'); // Stok produk
            $table->decimal('harga', 10, 2); // Harga produk dengan 2 angka desimal
            $table->string('gambar'); // URL atau path untuk gambar produk
            $table->timestamps(); // Timestamps untuk created_at dan updated_at
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
};
