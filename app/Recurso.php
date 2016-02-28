<?php

namespace Plan;

use Illuminate\Database\Eloquent\Model;

class Recurso extends Model
{
    protected $table = 'recurso';
    protected $fillable = ['descripcion', 'fuente', 'costo', 'actividad_id'];

    public $timestamps = false;

    public function actividad()
    {
        return $this->belongsTo('Plan\Actividad');
    }
}
