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
            $table->increments('id_dienthoai');
            $table->unsignedInteger('id_thuonghieu');
            $table->string('Tendt');
            $table->string('Anhdt');
            $table->string('Mota');
            $table->string('Gia');
            $table->string('Soluong');
            $table->unsignedInteger('id_khuyenmai');
            $table->unsignedInteger('id_baohanh');
            $table->string('trangthai');
            $table->timestamps();
            $table->foreign('id_thuonghieu')->references('id_thuonghieu')->on('thuonghieu');
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
