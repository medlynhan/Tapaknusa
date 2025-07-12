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
        Schema::table('msusers', function (Blueprint $table) {
            $table->integer('coin')->default(0); 
            $table->boolean('gamifikasi_status')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('msusers', function (Blueprint $table) {
            $table->dropColumn('coin');
            $table->dropColumn('gamifikasi_status');
        });
    }
};
