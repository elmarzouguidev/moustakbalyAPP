<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{


  protected $hidden = [
    'called'
  ];

  public function scopeAged($query)
  {
    return $query->where('age');
  }

  /*  public function getcartCNIAttribute()
    {

    }*/


  public function lastID()
  {
    return $this->id;
  }
}
