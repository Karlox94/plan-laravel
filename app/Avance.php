<?php

namespace Plan;

use Illuminate\Database\Eloquent\Model;

class Avance extends Model
{
    protected $table = 'avance';
    protected $fillable = ['descripcion', 'evidencia', 'actividad_id'];   

    public function actividad()
    {
        return $this->belongsTo('Plan\Actividad');
    }    
}
