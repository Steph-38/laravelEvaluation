<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chien extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom',
        'description', 
        'sexe',
        'age',
        'poids',
        'taille',
    ];

    public function race()
    {
        return $this->belongsTo('App\Race');
    }
}
