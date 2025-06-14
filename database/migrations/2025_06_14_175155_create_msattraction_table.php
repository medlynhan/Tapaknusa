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
       Schema::create('msattractions', function (Blueprint $table) {
            $table->increments('id'); // id int(11) NOT NULL
            $table->string('title', 255)->nullable(); // title varchar(255) DEFAULT NULL
            $table->string('destination', 255)->nullable(); // destination varchar(255) DEFAULT NULL
            $table->string('status', 50)->nullable(); // status varchar(50) DEFAULT NULL
            $table->decimal('rating', 2, 1)->nullable(); // rating decimal(2,1) DEFAULT NULL
            $table->string('startPrice', 50)->nullable(); // startPrice varchar(50) DEFAULT NULL
            $table->text('address')->nullable(); // address text DEFAULT NULL
            $table->date('schedule')->nullable(); // schedule date DEFAULT NULL
            $table->text('description')->nullable(); // description text DEFAULT NULL
            $table->string('operational_hours', 255)->nullable(); // operational_hours varchar(255) DEFAULT NULL
            $table->string('image1', 255)->nullable(); // image1 varchar(255) DEFAULT NULL
            $table->string('image2', 255)->nullable(); // image2 varchar(255) DEFAULT NULL
            $table->string('image3', 255)->nullable(); // image3 varchar(255) DEFAULT NULL
            $table->timestamps(); // created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('msattraction');
    }
};
