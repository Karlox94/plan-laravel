<?php

namespace Plan;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuario';
    protected $fillable = ['nombre', 'apellido', 'email', 'cargo','dependencia'];

    public function liderProceso()
    {
        return $this->hasMany('Plan\Proceso');
    }
    public function auditorProceso()
    {
        return $this->hasMany('Plan\Proceso');
    }
    public function liderPrograma()
    {
        return $this->hasMany('Plan\Programa');
    }
    public function auditorPrograma()
    {
        return $this->hasMany('Plan\Programa');
    }
    public function actividad()
    {
        return $this->hasMany('Plan\Actividad');
    }    
    public function rols()
    {
        return $this->belongsToMany('Plan\Rol', 'rol_usuario');
    }
    public function scopeEmail($query, $email)
    {
        if (trim($email) != '') {
            $query->where('email',$email);            
        }
    }
}
