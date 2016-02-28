<?php

namespace Plan;

use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    protected $table = 'programa';
    protected $fillable = ['nombre', 'facultad_id'];

    public $timestamps = false;

    public function facultad()
    {
        return $this->belongsTo('Plan\Facultad');
    }
    public function usuario()
    {
        return $this->belongsToMany('Plan\Usuario');
    }
}
