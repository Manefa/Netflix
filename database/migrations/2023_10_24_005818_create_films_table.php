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
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('titre', 255);
            $table->string('resume', 255);
            $table->string('duree', 255);
            $table->year('annee_de_production');
            $table->string('brand');
            $table->unsignedBigInteger('realisateur_id');
            $table->unsignedBigInteger('producteur_id');
            $table->string('lien_film', 255);
            $table->string('pochette_url', 255);
            $table->integer('cote');
            $table->string('notation');
            $table->foreignId('genre_id')->constrained();
            $table->timestamps();

            // Définir les clés étrangères
            $table->foreign('realisateur_id')->references('id')->on('personnes');
            $table->foreign('producteur_id')->references('id')->on('personnes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('films');
    }
};
