<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{
    protected $table = 'personnes';
    use HasFactory;

    protected $fillable = ['nom', 'date_naissance', 'photo', 'role_principal', 'biographie'];

    public function filmRealises(){
        return $this->hasMany(Film::class, 'realisateur_id');
    }

    /**
     * Un acteur joue dans plusieurs films
     */

    public function films() 
    {
        return $this->belongsToMany('Film::class');
    }

}
