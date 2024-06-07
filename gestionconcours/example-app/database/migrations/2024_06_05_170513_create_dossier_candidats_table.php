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
        Schema::create('dossier_candidats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_candidat');
            $table->timestamps();

            $table->foreign('id_candidat')->references('id')->on('candidats');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dossier_candidats');
    }
};
