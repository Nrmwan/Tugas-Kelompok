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
        Schema::create('baju', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 255);
            $table->text('deskripsi');
            $table->decimal('harga', 10, 2);
            $table->string('ukuran', 20);
            $table->string('warna', 20);
            $table->integer('stok');
            $table->string('gambar', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('baju');
    }
};
