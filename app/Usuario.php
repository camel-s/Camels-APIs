<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Endereco;
use App\Login;
use App\Oferente;
use App\Contratante;

class Usuario extends Model
{
    protected $fillable = ['nome', 'data_nascimento', 'login', 'telefone', 'endereco'];

    public function endereco(){
        return $this->hasOne('App\Endereco');
    }

    public function login(){
        return $this->hasOne('App\Login');
    }

    public function oferente(){
        return $this->belongsTo('App\Oferente');
    }

    public function contratante(){
        return $this->belongsTo('App\Contratante');
    }
}
