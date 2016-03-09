<?php

namespace Plan;

use Illuminate\Database\Eloquent\Model;

class Proceso extends Model
{
    protected $table = 'proceso';
    protected $fillable = ['nombre', 'lider_id', 'auditor_id'];

    public function plan()
    {
        return $this->hasMany('Plan\Plan');
    }
    public function lider()
    {
        return $this->belongsTo('Plan\Usuario');
    }
    public function auditor()
    {
        return $this->belongsTo('Plan\Usuario');
    }
}
