<?php

namespace Plan;

use Illuminate\Database\Eloquent\Model;

class AsignarDependencia extends Model
{
    protected $table = 'asignarDependencia';
    protected $fillable = ['usuario_id', 'dependencia_id'];

    public $timestamps = false;
}
