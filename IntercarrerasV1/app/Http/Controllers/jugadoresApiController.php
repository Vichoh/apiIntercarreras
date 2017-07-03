<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jugador;

class jugadoresApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jugadores = Jugador::all();

        return response()->json($jugadores,200);
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
        try{
            

            $jugador = new Jugador($request->all());

            $jugador->save();

            if (!isset($jugador)) {

                return response()->json(['status'=>true,'Great thanks'],200);
            }


        }catch (\Exception $e){
            return response('Error al insertar', 500); 
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try{
            $jugador = Jugador::find($id);
            

            if (!isset($jugador)) {
                $datos = [
                    'errors' => true,
                    'msg' => 'No se encontró la pelicula con ID = ' . $id,
                ];
                $jugador = \Response::json($datos, 404); 
            }

        }catch(\Exception $e){

            Log::critical("jugador no encontrado {$e->getCode()}, {$e->getLine()}, {$e->getMessage()}");
            return response('Error al buscar', 500); 
        }

        return $jugador;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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

        
        $jugador = Jugador::find($id); 
        $jugador->fill($request->all());
        $jugadorRetorno= $jugador->save();
          
            if (isset($jugador)) {
                $jugador = \Response::json(['msj'=>'se actualizo'], 200);
            }else{
                $jugador = \Response::json(['error' => 'No se actualizo el jugador'] , 404);
            }


       return $jugador;
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $jugador = Jugador::find($id);

            if (!isset($jugador)) {
                return response()->json(['Jugador no existe'],404); 
            }

            $jugador->delete();
            return response()->json('Usuario Eliminado',200);

        }catch(\Exception $e){
            Log::critical("Error: {$e->getCode()}, {$e->getLine()}, {$e->getMessage()}");
            return response('Error', 500); 
        }
    }

/*
      public function bucarNombre($nombre)
    {
        try{
            $jugador = Jugador::find($nombre);
            

            if (!isset($jugador)) {
                $datos = [
                    'errors' => true,
                    'msg' => 'No se encontró la pelicula con Nombre= ' . $nombre,
                ];
                $jugador = \Response::json($datos, 404); 
            }

        }catch(\Exception $e){

            Log::critical("jugador no encontrado {$e->getCode()}, {$e->getLine()}, {$e->getMessage()}");
            return response('Error al buscar', 500); 
        }

        return $jugador;
    }

*/
}
