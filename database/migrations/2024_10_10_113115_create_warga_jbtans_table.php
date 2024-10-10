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
        Schema::create('warga_jbtans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_warga');
            $table->enum('jabatan', ['rt', 'rw']);
            $table->enum('rt', ['50', '51', '52', '53', '54', '55', '56']);
            $table->enum('rw', ['08']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('warga_jbtans');
    }
};
