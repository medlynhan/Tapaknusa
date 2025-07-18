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
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique(); // Menambahkan unique key untuk email
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable(); // Kolom untuk verifikasi email
            $table->rememberToken(); // Kolom untuk remember_token
            $table->timestamps(); // Menambahkan kolom created_at dan updated_at
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
