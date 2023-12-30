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
        Schema::create('etablissement_scolaires', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('nom');
            $table->string('localisation');
            $table->unsignedBigInteger('id_ia');
            $table->unsignedBigInteger('id_departement');
            $table->timestamps();
            $table->foreign('id_ia')->references('id')->on('inspection_academies');
            $table->foreign('id_departement')->references('id')->on('departements');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etablissement_scolaires');
    }
};
