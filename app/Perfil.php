<?php

namespace Plan;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    protected $table = 'perfil';
    protected $fillable = ['rol'];

    public $timestamps = false;
}
