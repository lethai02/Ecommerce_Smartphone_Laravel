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
        Schema::create('thuonghieu', function (Blueprint $table) {
            $table->increments('id_thuonghieu');
            $table->string('Tenthuonghieu');
            $table->string('Gmail');
            $table->string('trangthai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('thuonghieu');
    }
};
