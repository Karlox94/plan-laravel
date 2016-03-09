<?php

namespace Plan;

use Illuminate\Database\Eloquent\Model;

class Falencia extends Model
{
    protected $table = 'falencia';
    protected $fillable = ['descripcion', 'tipo_accion', 'causaRaiz', 'metodologia',
    	'plan_id', 'origen_id', 'accion_id', 'caracteristica_id'];

    public function caracteristica()
    {
        return $this->belongsTo('Plan\Caracteristica');
    }
    public function plan()
    {
        return $this->belongsTo('Plan\Plan');
    }
    public function origen()
    {
        return $this->belongsTo('Plan\Origen');
    }
    public function accion()
    {
        return $this->belongsTo('Plan\Accion');
    }
    public function actividad()
    {
        return $this->hasMany('Plan\Actividad');
    }
    public function correcion()
    {
        return $this->hasMany('Plan\Correcion');
    }
}
