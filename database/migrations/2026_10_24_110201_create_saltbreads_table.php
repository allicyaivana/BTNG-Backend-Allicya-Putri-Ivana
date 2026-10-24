<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('saltbreads', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('rasa');
            $table->integer('harga');
            $table->integer('stok');
            $table->string('tekstur');
            $table->enum('status', ['tersedia', 'habis'])->default('tersedia');
            $table->string('foto')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('saltbreads');
    }
};