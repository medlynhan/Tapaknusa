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
    Schema::create('usercart', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('user_id');
        $table->unsignedBigInteger('ticket_type_id');
        $table->integer('quantity')->default(1);
        $table->timestamps();

        // foreign key
        $table->foreign('user_id')
              ->references('id')->on('msusers')
              ->onDelete('cascade');

        $table->foreign('ticket_type_id')
              ->references('id')->on('msttickettypes')
              ->onDelete('cascade');
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usercart');
    }
};
