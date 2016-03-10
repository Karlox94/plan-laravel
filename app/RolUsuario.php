<?php

namespace Plan;

use Illuminate\Database\Eloquent\Model;

class RolUsuario extends Model
{
    protected $table = 'rol_usuario';
    protected $fillable = ['rol_id', 'usuario_id'];
}
