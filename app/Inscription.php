<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{


    public function scopeAged($query)
    {
        return $query->where('age');
    }

  /*  public function getcartCNIAttribute()
    {

    }*/
}
