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
        Schema::create('lecturehalls', function (Blueprint $table) {
            $table->id();
            $table->string('initial');
            $table->unsignedBigInteger('lec_id');
            $table->foreign('lec_id')->references('id')->on('eventables');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lecturehalls');
    }
};
