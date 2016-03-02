<?php

namespace Plan;

use Illuminate\Database\Eloquent\Model;

class Dependencia extends Model
{
    protected $table = 'dependencia';
    protected $fillable = ['nombre', 'proceso_id'];

    public function proceso()
    {
        return $this->belongsTo('Plan\Proceso');
    }
    public function usuario()
    {
        return $this->belongsToMany('Plan\Usuario');
    }
}
