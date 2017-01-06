<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImagenAnimal extends Model
{
    protected $table = "";

    protected $fillable = [
        'name'
    ];

    public function animales()
    {
        return $this->belongsToMany('App\Animal');
    }

}
