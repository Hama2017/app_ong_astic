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
        Schema::create('inspection_academies', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('nom');
            $table->unsignedBigInteger('id_region');
            $table->timestamps();
            $table->foreign('id_region')->references('id')->on('regions');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inspection_academies');
    }
};
