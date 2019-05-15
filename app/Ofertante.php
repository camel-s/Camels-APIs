<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Usuario;

class Ofertante extends Model
{
    public function usuario(){
        return $this->hasOne('App\Usuario');
    }
}
