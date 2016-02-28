<?php

namespace Plan;

use Illuminate\Database\Eloquent\Model;

class Debilidad extends Model
{
    protected $table = 'lineamiento';
    protected $fillable = ['descripcion', 'origen', 'tipoAccion', 'causaRaiz', 'metodologia',
    	'caracteristica_id', 'plan_id'];

    public $timestamps = false;

    public function caracteristica()
    {
        return $this->belongsTo('Plan\Caracteristica');
    }
    public function plan()
    {
        return $this->belongsTo('Plan\Plan');
    }
    public function actividad()
    {
        return $this->hasMany('Plan\Actividad');
    }
}
