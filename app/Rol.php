<?php

namespace Plan;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = 'rol';
    protected $fillable = ['nombre'];

    public function usuarios()
    {
        return $this->belongsToMany('Plan\Usuario', 'rol_usuario');
    }

}
