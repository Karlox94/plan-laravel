<?php

namespace Plan;

use Illuminate\Database\Eloquent\Model;

class Factor extends Model
{
    protected $table = 'factor';
    protected $fillable = ['descripcion', 'lineamiento_id'];   

    public function lineamiento()
    {
        return $this->belongsTo('Plan\Lineamiento');
    }
    public function caracteristica()
    {
        return $this->hasMany('Plan\Caracteristica');
    }
}
