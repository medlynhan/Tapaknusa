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
            $table->increments('id');                        // id int(11) NOT NULL
            $table->unsignedInteger('attraction_id')->nullable(); // attraction_id int(11) DEFAULT NULL
            $table->string('title', 255)->nullable();        // title varchar(255) DEFAULT NULL
            $table->integer('price')->nullable();            // price int(11) DEFAULT NULL
            $table->string('category', 100)->nullable();     // category varchar(100) DEFAULT NULL
            $table->text('description')->nullable();         // description text DEFAULT NULL

            // Jika ingin menyertakan timestamps:
            $table->timestamps();

            // Foreign key ke msattraction.id (jika msattraction sudah ada)
            $table->foreign('attraction_id')
                  ->references('id')->on('msattractions')
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
