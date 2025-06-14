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
        Schema::create('msattractionrs', function (Blueprint $table) {
$table->id();  // Kolom auto-increment primary key
            $table->string('title', 255)->nullable();  // Kolom untuk title
            $table->string('destination', 255)->nullable();  // Kolom untuk destination
            $table->string('status', 50)->nullable();  // Kolom untuk status
            $table->decimal('rating', 2, 1)->nullable();  // Kolom untuk rating (angka desimal dengan 2 digit, 1 angka setelah koma)
            $table->string('startPrice', 50)->nullable();  // Kolom untuk startPrice
            $table->text('address')->nullable();  // Kolom untuk address
            $table->date('schedule')->nullable();  // Kolom untuk schedule (tanggal)
            $table->text('description')->nullable();  // Kolom untuk description
            $table->string('operational_hours', 255)->nullable();  // Kolom untuk operational_hours
            $table->string('image1', 255)->nullable();  // Kolom untuk image1
            $table->string('image2', 255)->nullable();  // Kolom untuk image2
            $table->string('image3', 255)->nullable();  // Kolom untuk image3
            $table->timestamps();  // Kolom untuk created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('msattractionrs');
    }
};
