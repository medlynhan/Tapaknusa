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
        Schema::create('msusers', function (Blueprint $table) {
            $table->id();  // Kolom auto-increment primary key
            $table->string('name')->nullable();  // Kolom untuk nama pengguna
            $table->string('email')->nullable();  // Kolom untuk email pengguna
            $table->string('password')->nullable();  // Kolom untuk password
            $table->timestamps();  // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('msusers');
    }
};
