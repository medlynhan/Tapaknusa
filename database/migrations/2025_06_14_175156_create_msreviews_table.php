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
            $table->increments('id'); // id int(11) NOT NULL
            $table->unsignedInteger('attraction_id')->nullable(); // attraction_id int(11) DEFAULT NULL
            $table->unsignedInteger('user_id')->nullable(); // user_id int(11) DEFAULT NULL
            $table->integer('rating')->nullable(); // rating int(11) DEFAULT NULL
            $table->text('comment')->nullable(); // comment text DEFAULT NULL
            $table->timestamps(); // created_at and updated_at

            // Foreign keys
            $table->foreign('attraction_id')->references('id')->on('msattractions')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('msusers')->onDelete('cascade');
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
