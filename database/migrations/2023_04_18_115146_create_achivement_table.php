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
        Schema::create('achivement', function (Blueprint $table) {
            $table->id();
            $table->string('kode_achivement', 4);
            $table->time('time_from');
            $table->time('time_to');
            $table->timestamps();
            $table->index('kode_achivement');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('achivement');
    }
};
