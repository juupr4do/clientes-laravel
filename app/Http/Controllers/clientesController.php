<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clientes;

class clientesController extends Controller
{
    public function registro(){
        return view('registroClientes');
    }

    public function salvar(Request $request){
        $cliente  = new Clientes();
        $cliente->create($request->all());
        
        // configurando mensagem de sucesso
        if ($cliente){
            $status = true;
            
            return redirect()
                   ->back()
                   ->with('st', $status); 
        }
    }

    public function index(){
        $clientes = Clientes::get();
        return (view('listaClientes', ['clientes' => $clientes]));
    }
    
}
