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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('username')->unique();
            $table->string('no_telepon');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('alamat_lengkap');
            $table->string('photo')->nullable(); // Corrected: Separate column definition
            $table->string('slug_link')->unique()->nullable();
            $table->string('status_aktif')->default('Aktif');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
