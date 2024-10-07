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
        Schema::create('tbwargas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('email');
            $table->string('username');
            $table->string('password');
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
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
        Schema::dropIfExists('tbwargas');
    }
};
