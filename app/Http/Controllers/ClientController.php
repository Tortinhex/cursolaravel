<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ClientController extends Controller
{
    /**
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
     * 
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id) {
        
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
     * Retorna um registro específico
     * 
     * @param int $id
     * @return Response
     */
    public function destroy($id) {
        \App\Client::find($id)->delete();
    }
}
