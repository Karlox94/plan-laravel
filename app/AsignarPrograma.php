<?php

namespace Plan;

use Illuminate\Database\Eloquent\Model;

class AsignarPrograma extends Model
{
    protected $table = 'asignarPrograma';
    protected $fillable = ['usuario_id', 'programa_id'];

    public $timestamps = false;
}
