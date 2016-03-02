<?php

namespace Plan;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuario';
    protected $fillable = ['cedula', 'nombre', 'apellido', 'email'];

    public function plan()
    {
        return $this->hasMany('Plan\Plan');
    }
    public function correccion()
    {
        return $this->hasMany('Plan\Correccion');
    }
    public function actividad()
    {
        return $this->hasMany('Plan\Actividad');
    }
    public function dependencia()
    {
        return $this->belongsToMany('Plan\Dependencia');
    }
    public function programa()
    {
        return $this->belongsToMany('Plan\Programa');
    }
}
