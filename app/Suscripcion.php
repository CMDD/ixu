<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Suscripcion extends Model
{
    public function titular(){
      return $this->belongsTo('App\Titular');
    }
}
