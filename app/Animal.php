<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $table ="animal";

    protected $fillable = [
        'name',
        'edad',
        'descripcion',
        'tamaño'
    ];

    public function usuarios()
    {
        return $this->belongsTo('App\User');
    }

    public function imagen_animales()
    {
        return $this->hasMany('App\ImagenAnimal');
    }

    public function especies()
    {
        return $this->hasOne('App\Especie');
    }

}