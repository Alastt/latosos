<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PerfilUsuario extends Model
{
    protected $table = "perfil_usuario";

    protected $fillable = [
        'tipo',
        'descripcion',
        'web',
        'tel_casa',
        'tel_cel',
        'direccion',
        'estado',
        'ciudad',
        'requisitos',
        'info_solicitada',
        'email_contacto'
    ];

    public function imagen_perfiles(){
        return $this->hasOne('App\ImagenPerfil');
    }

    public function usuarios(){
        return $this->belongsTo('App\User');
    }
}