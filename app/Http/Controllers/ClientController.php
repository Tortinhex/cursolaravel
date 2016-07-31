<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ClientController extends Controller
{
    /**
     * Exibe todos os registros
     * 
     * @return Response
     */
    public function index() {
        return \App\Client::all();
    }
    
    /**
     * Todas as informações que este metodo receber serão inseridas
     * na base de dados
     * 
     * @param Request $request
     * @return Response
     */
    public function store(Request $request) {
        return \App\Client::create($request->all());
    }
    
    /**
     * Atualiza um registro
     * 
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id) {
        $client = \App\Client::find($id);
        $client->update($request->all());
        return $client;
    }
    
    /**
     * Retorna um registro específico
     * 
     * @param int $id
     * @return Response
     */
    public function show($id) {
        return \App\Client::find($id);
    }
    
    /**
     * Remove um registro
     * 
     * @param int $id
     * @return Response
     */
    public function destroy($id) {
        $client = \App\Client::find($id);
        $nomeCliente = $client->name;
        $client->delete();
        return "Cliente {$nomeCliente} foi removido!";
    }
}
