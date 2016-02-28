<?php

namespace Plan;

use Illuminate\Database\Eloquent\Model;

class Proceso extends Model
{
    protected $table = 'proceso';
    protected $fillable = ['nombre'];

    public $timestamps = false;

    public function dependencia()
    {
        return $this->hasMany('Plan\Dependencia');
    }
}
