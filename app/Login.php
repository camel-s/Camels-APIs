<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Usuario;

class Login extends Model
{
    protected $fillable = ['e-mail, senha'];

    protected $hidden = ['senha'];

    public function usuario(){
        return $this->belongsTo('App\Usuario');
    }
}
