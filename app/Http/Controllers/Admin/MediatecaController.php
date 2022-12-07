<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mediateca;
use Illuminate\Http\Request;

class MediatecaController extends Controller
{
    public function index()
    {
        return view('site.mediateca.list.index');
    }
    public function store(Request $request)
    {
        $mensagens = [
            'required' => 'O :attribute é obrigatório!',
            'tema.min' => 'É necessário no mínimo 4 caracteres no assunto!',
            'corpo.min' => 'É necessário no mínimo 20 caracteres na Mensagem!',
            'email.email' => 'Digite um email válido!'
        ];

        $request->validate(
            [
                'titulo' => 'required',
                'descricacao' => 'required',
                'categoria' => 'required',
                'ficheiro' => 'required|mimes:pdf'
            ],
            $mensagens
        );
        if ($request->hasFile('ficheiro')) {
            $file1 = $request->file('ficheiro');
            $fileName = 'ficheiro-' . time() . '.' . $file1->getClientOriginalExtension();
            $dados['ficheiro'] = $file1->storeAs('ficheiro', $fileName);
        } else {
            $dados['ficheiro'] = $request->titulo;
        }
        Mediateca::create([
            'titulo' => $request->titulo,
            'descricacao' => $request->descricacao,
            'categoria' => $request->categoria,
            'ficheiro' => $dados['ficheiro'],
        ]);
    }
}
