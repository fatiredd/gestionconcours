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
        Schema::create('concours', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_dossier_candidat')->nullable();
            $table->string('nom_concours');
            $table->text('description');
            $table->date('date_debut');
            $table->date('date_fin');
            $table->timestamps();

            $table->foreign('id_dossier_candidat')->references('id')->on('dossier_candidats');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('concours');
    }
};

