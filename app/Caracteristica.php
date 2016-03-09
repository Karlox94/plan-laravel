<?php

namespace Plan;

use Illuminate\Database\Eloquent\Model;

class Caracteristica extends Model
{
    protected $table = 'caracteristica';
    protected $fillable = ['descripcion', 'factor_id'];

    public function factor()
    {
        return $this->belongsTo('Plan\Factor');
    }
    public function falencia()
    {
        return $this->hasMany('Plan\Falencia');
    }
}
