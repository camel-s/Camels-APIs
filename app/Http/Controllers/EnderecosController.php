<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Endereco;
class EnderecosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enderecos = Endereco::all();
        return response()->json($enderecos);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $endereco = new Endereco();
        $endereco->fill($request->all());
        $endereco->save();
        return response()->json($endereco, 201);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $endereco = Endereco::find($id);
        if(!$endereco){
            return response()->json([
                'message'   => 'Informação não encontrada',
            ], 404); 
        }
        return response()->json($endereco);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $endereco = Endereco::find($id);
        if(!$endereco) {
            return response()->json([
                'message'   => 'Informação não encontrada',
            ], 404);
        }
        $endereco->fill($request->all());
        $endereco->save();
        return response()->json($endereco);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $endereco = Endereco::find($id);
        if(!$endereco){
            return response()->json([
                'message'   => 'Informação não encontrada',
            ], 404);    
        }
        $endereco->delete();
            return response()->json([
                'message' => 'Sucesso ao excluir a informação',
            ], 201);
        }
}