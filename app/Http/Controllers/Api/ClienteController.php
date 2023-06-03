<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ClienteController extends Controller
{
    // public $cliente;
    // public function clientes(){
    //     $clients = Cliente::All();
    //     $cliente = json_decode($clients, true);
    //     $this->cliente = $cliente; 
    // }
    public function index(){
        $clientes = Cliente::all();
        return  view('clientes/index', compact('clientes'));


        // return view('clientes/index', ['clientes'=>$clientes]);

        // return response()->json([
        //     "result" => $clientes
        // ], Response::HTTP_FOUND);
    }
    public function New(Request $request){

        $cliente = new Cliente();

        $cliente->nombre = $request->nombre;
        $cliente->apellido = $request->apellido;
        $cliente->dni = $request->dni;
        $cliente->email = $request->email;
        $cliente->passwd = $request->passwd;

        $cliente->save();
        
        return response()->json(['result'=> $cliente], Response::HTTP_ACCEPTED);
    }
    public function update(Request $request, $id){

        $cliente = Cliente::findOrFail($request->id);

        $cliente->nombre = $request->nombre;
        $cliente->apellido = $request->apellido;
        $cliente->dni = $request->dni;
        $cliente->email = $request->email;
        $cliente->passwd = $request->passwd;

        $cliente->save();
        
        return response()->json(['result' => $cliente], Response::HTTP_OK);

    }
    // public function destroy($id){
    public function destroy(Cliente $id){
        $id->delete();
        // Cliente::destroy($id);
        return response()->json(['message'=>'DELETED or destroyed'], Response::HTTP_OK);
    }
}
