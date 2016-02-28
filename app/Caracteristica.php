<?php

namespace Plan;

use Illuminate\Database\Eloquent\Model;

class Caracteristica extends Model
{
    protected $table = 'caracteristica';
    protected $fillable = ['descripcion', 'factor_id'];

    public $timestamps = false;

    public function factor()
    {
        return $this->belongsTo('Plan\Factor');
    }
    public function debilidades()
    {
        return $this->hasMany('Plan\Debilidad');
    }
}
