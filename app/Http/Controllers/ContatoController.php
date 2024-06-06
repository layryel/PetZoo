<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function enviar(Request $request)
    {
        $data = $request->all();

        var_dump($data);

        return view('contato_resultados', compact('data'));
    }

}
