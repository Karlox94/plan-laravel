<?php

namespace Plan;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $table = 'plan';
    protected $fillable = ['numero', 'fechaAnalisis', 'añoEvaluacion', 'tipo', 'programa_id', 'proceso_id'];

    public function falencia()
    {
        return $this->hasMany('Plan\Falencia');
    }
    public function programa()
    {
        return $this->belongsTo('Plan\Programa');
    }
    public function proceso()
    {
        return $this->belongsTo('Plan\Proceso');
    }
}
}
