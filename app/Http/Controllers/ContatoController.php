<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function enviar(Request $request)
    {
         // Captura todos os dados do formulário submetido
        $data = $request->all();

        // Exibe os dados utilizando var_dump
        var_dump($data);

        // Passa os dados para a view 'contato_resultados'
        return view('contato_resultados', compact('data'));
    }

}
