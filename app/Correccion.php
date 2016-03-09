<?php

namespace Plan;

use Illuminate\Database\Eloquent\Model;

class Correccion extends Model
{
    protected $table = 'correccion';
    protected $fillable = ['descripcion', 'fechaEjecucion', 'falencia_id',
    		'usuario_id'];

    public function falencia()
    {
        return $this->belongsTo('Plan\Falencia');
    }
    public function usuario()
    {
        return $this->belongsTo('Plan\Usuario');
    }
}
