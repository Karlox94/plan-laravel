<?php

namespace Plan;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    protected $table = 'actividad';
    protected $fillable = ['descripcion', 'meta', 'indicador', 'fechaInicio', 'fechFinal',
        	'responsable', 'porcentaje', 'estadoAccion', 'observacion', 'noConformidad_id',
        	'debilidad_id', 'usuario_id'];

    public function noConformidad()
    {
        return $this->belongsTo('Plan\NoConformidad');
    }
    public function debilidad()
    {
        return $this->belongsTo('Plan\Debilidad');
    }
    public function recurso()
    {
        return $this->hasMany('Plan\Recurso');
    }
    public function usuario()
    {
        return $this->belongsTo('Plan\Usuario');
    }
}
