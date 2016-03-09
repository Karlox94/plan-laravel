<?php

namespace Plan;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    protected $table = 'actividad';
    protected $fillable = ['descripcion', 'meta', 'indicador', 'fechaInicio', 'fechFinal',
        	'falencia_id', 'usuario_id'];

    public function falencia()
    {
        return $this->belongsTo('Plan\Falencia');
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
