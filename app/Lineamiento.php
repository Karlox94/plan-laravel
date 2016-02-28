<?php

namespace Plan;

use Illuminate\Database\Eloquent\Model;

class Lineamiento extends Model
{
    protected $table = 'lineamiento';
    protected $fillable = ['descripcion'];

    public $timestamps = false;

    public function factor()
    {
        return $this->hasMany('Plan\Factor');
    }
}
