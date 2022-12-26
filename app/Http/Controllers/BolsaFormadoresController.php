<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bolsaFormador;

class BolsaFormadoresController extends Controller
{
    //
    public function create()
    {
        return view('site.bolsaFormadores\list.index');
    }

    public function store(Request $request)
    {
        bolsaFormador::create([
           'nomeCompleto' => $request->nomeCompleto,
           'email' => $request->email,
           'categoria' => $request->categoria,
           'localidade' => $request->localidade,
           'fotoPasse' => $request->fotografia,
           'cv' => $request->cv,
        ]);  
        
        return "produtos criados com Sucesso!";
    }
}
