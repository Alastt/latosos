<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImagenPerfil extends Model
{
    protected $table = "imagen_perfil";

    protected $fillable = [
        'name'
    ];

    public function perfil_usuarios()
    {
        return $this->belongsTo('App\PerfilUsuario');
    }

}
