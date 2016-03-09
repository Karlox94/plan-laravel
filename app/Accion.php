<?php

namespace Plan;

use Illuminate\Database\Eloquent\Model;

class Accion extends Model
{
    protected $table = 'accion';
    protected $fillable = ['tipo'];

    public function falencia()
    {
        return $this->hasMany('Plan\Falencia');
    }
}
