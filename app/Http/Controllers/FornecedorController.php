<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index() {
        $fornecedores = [
            0 => [
                'nome' => 'Fornecedor 1', 
                'status' => 'N',
                'CNPJ' => '0',
                'ddd' => '11', //são paulo (SP)
                'telefone' => '0000-0000',
            ],
            1 => [
                'nome' => 'Fornecedor 2', 
                'status' => 'S',
                'CNPJ' => null,
                'ddd' => '85', //fortaleza (CE)
                'telefone' => '0000-0000',
            ],
            2 => [
                'nome' => 'Fornecedor 3', 
                'status' => 'S',
                'CNPJ' => null,
                'ddd' => '32', //Juiz de Fora (MG)
                'telefone' => '0000-0000',
            ],
        ];
        return view('app.fornecedores.index', compact('fornecedores'));
    }
}
