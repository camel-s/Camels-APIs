<?php

use Illuminate\Http\Request;
use App\Http\Resources\EnderecoResource;
use App\Endereco;



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::resource("/enderecos","EnderecoController");




?>