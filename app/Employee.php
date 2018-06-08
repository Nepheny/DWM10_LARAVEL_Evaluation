<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public function workplace()
    {
        return $this->belongsTo('App\Workplace');
    }
}
