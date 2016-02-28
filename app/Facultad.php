<?php

namespace Plan;

use Illuminate\Database\Eloquent\Model;

class Facultad extends Model
{
    protected $table = 'facultad';
    protected $fillable = ['nombre'];

    public $timestamps = false;

    public function programa()
    {
        return $this->hasMany('Plan\Programa');
    }
}
