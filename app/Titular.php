<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Titular extends Model
{
    public function suscripciones(){
      return $this->hasMany('App\Suscripcion');
    }
}
