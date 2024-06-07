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
        Schema::create('gestions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_concours');
            $table->unsignedBigInteger('id_dossier_candidat');
            $table->unsignedBigInteger('id_resultat');
            $table->unsignedBigInteger('id_utilisateur');
            $table->timestamps();

            $table->foreign('id_concours')->references('id')->on('concours');
            $table->foreign('id_dossier_candidat')->references('id')->on('dossier_candidats');
            $table->foreign('id_resultat')->references('id')->on('resultats');
            $table->foreign('id_utilisateur')->references('ID_utilisateur')->on('utilisateurs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gestions');
    }
};
