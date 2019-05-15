<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Usuario;

class Endereco extends Model
{
    protected $fillable = ['rua', 'bairro', 'cidade', 'estado', 'pais'];

    public function usuario(){
        return $this->belongsTo('App\Usuario');
    }
}
