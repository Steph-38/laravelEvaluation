<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'classification',
        'longevite'
    ];

    public function chien()
    {
        return $this->hasMany('App\Chien');
    }
}
