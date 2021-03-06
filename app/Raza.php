<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Raza extends Model
{
    protected $table = "raza";

    protected $fillable = [
        'name'
    ];

    public function especies()
    {
        return $this->belongsTo('App\Especie');
    }

}
