<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    //
    public function cadastro(){
        return view('cadastroProduto');        
    }
    public function cadastroValidate(Request $request){
        $request->validate([
            'nome' => 'required|string',
            'barras' => 'required|numeric|',
            'marca' => 'required|string|max:50',
            'venda' => 'required|integer',
            'compra' => 'required|integer',
            'validade' => 'required|date'
        ]);
        return redirect()->route('admin');
    }
    public function excluir(){
        return view('excluirProduto');        
    }
    public function excluirValidate(Request $request){
        $request->validate([
            'nome' => 'required|string',
            'barras' => 'required|numeric',
            
        ]);
        return redirect()->route('admin');
    }
    public function listar(){
        return view('listarProduto');
    }
}
