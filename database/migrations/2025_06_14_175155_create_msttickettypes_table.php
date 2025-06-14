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
    Schema::create('msttickettypes', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('attraction_id');
        $table->string('type_name');
        $table->decimal('price', 10, 2);
        $table->integer('stock')->default(0);
        $table->timestamps();

        // foreign key ke msattraction
        $table->foreign('attraction_id')
              ->references('id')->on('msattraction')
              ->onDelete('cascade');
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('msttickettypes');
    }
};
