<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('name'); // Nama produk
            $table->unsignedBigInteger('brand_id'); // Foreign key ke tabel brands
            $table->integer('stock'); // Stok produk
            $table->decimal('price', 10, 2); // Harga produk dengan 2 desimal
            $table->timestamps();

            // Menambahkan foreign key ke tabel brands
            $table->foreign('brand_id')
                  ->references('id')->on('brands')
                  ->onDelete('cascade'); // Hapus produk jika brand dihapus
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
