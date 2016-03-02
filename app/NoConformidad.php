<?php

namespace Plan;

use Illuminate\Database\Eloquent\Model;

class NoConformidad extends Model
{
    protected $table = 'noConformidad';
    protected $fillable = ['descripcion', 'origen', 'tipoAccion', 'causaRaiz', 'metodologia',
    		'plan_id'];

    public function plan()
    {
        return $this->belongsTo('Plan\Plan');
    }
    public function correcion()
    {
        return $this->hasMany('Plan\Correccion');
    }
    public function actividad()
    {
        return $this->hasMany('Plan\Actividad');
    }
}
