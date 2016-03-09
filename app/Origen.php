<?php

namespace Plan;

use Illuminate\Database\Eloquent\Model;

class Origen extends Model
{
	protected $table = 'origen';
    protected $fillable = ['tipo'];

    public function falencia()
    {
        return $this->hasMany('Plan\Falencia');
    }

}
