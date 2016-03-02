<?php

namespace Plan;

use Illuminate\Database\Eloquent\Model;

class Correccion extends Model
{
    protected $table = 'correccion';
    protected $fillable = ['descripcion', 'fechaEjecucion', 'responsable', 'noConformidad_id',
    		'usuario_id'];

    public function noConformidad()
    {
        return $this->belongsTo('Plan\NoConformidad');
    }
    public function usuario()
    {
        return $this->belongsTo('Plan\Usuario');
    }
}
