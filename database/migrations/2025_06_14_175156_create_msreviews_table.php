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
    Schema::create('msreviews', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('attraction_id');
        $table->unsignedBigInteger('user_id');
        $table->tinyInteger('rating');          // misal 1–5
        $table->text('comment')->nullable();
        $table->timestamps();

        // foreign key
        $table->foreign('attraction_id')
              ->references('id')->on('msattraction')
              ->onDelete('cascade');

        $table->foreign('user_id')
              ->references('id')->on('msusers')
              ->onDelete('cascade');
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('msreviews');
    }
};
