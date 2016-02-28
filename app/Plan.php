<?php

namespace Plan;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $table = 'plan';
    protected $fillable = ['numero', 'fechaAnalisis', 'añoEvaluacion', 'tipo', 'usuario_id'];

    public $timestamps = false;

    public function debilidad()
    {
        return $this->hasMany('Plan\Delidad');
    }
    public function noConformidad()
    {
        return $this->hasMany('Plan\NoConformidad');
    }
    public function usuario()
    {
        return $this->belongsTo('Plan\Usuario');
    }
}
