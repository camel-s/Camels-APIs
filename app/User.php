<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;
use App\Endereco;
use App\Oferente;
use App\Contratante;
class User extends Authenticatable
{
    use Notifiable, HasApiTokens;
  
    protected $fillable = ['name', 'email', 'password', 'password_confirmation', 'message'];

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

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    
    /*protected $hidden = [
        'password', 
    ];*/
    
}
