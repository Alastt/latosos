<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Especie extends Model
{
    protected $table = "especie";

    protected $fillable = [
        'name'
    ];

    public function animales()
    {
        return $this->belongsTo('App\Animal');
    }

    public function razas()
    {
        return $this->hasOne('App\Raza');
    }

}
