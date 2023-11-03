<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    protected $fillable = ['titre', 'resume', 'duree', 'annee_de_production', 'brand', 'realisateur_id', 'producteur_id', 'lien_film', 'pochette_url', 'cote', 'notation', 'genre_id'];

    public function realisateur(){
        return $this->belongsTo(Personne::class);
    }

    public function producteur(){
        return $this->belongsTo(Personne::class);
    }

    public function genres(){
        return $this->belongsToMany(Genre::class);
    }

    public function acteurs(){
        return $this->belongsToMany(Personne::class);
    }
}
