<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{
    use HasFactory;

    public function filmRealises(){
        return $this->hasMany(Film::class, 'realisateur_id');
    }
}
