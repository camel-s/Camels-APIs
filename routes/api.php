<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(array('prefix' => 'api'), function()
{

  Route::get('/', function () {
      return response()->json(['message' => 'Camels API', 'status' => 'Connected']);;
  });

  Route::resource('enderecos', 'EnderecosController');
  Route::resource('logins', 'LoginsController');
  Route::resource('usuario', 'UsuariosController');

});

Route::get('/', function () {
    return redirect('api');
});

?>