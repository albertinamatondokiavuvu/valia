<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mediateca;
use Illuminate\Http\Request;

class MediatecaController extends Controller
{
    public function index()
    {
        $categorias = Mediateca::distinct('categoria')->count();
        $categoria = Mediateca::selectRaw('categoria as categoria,COUNT(*) as ficheiro')->groupBy('categoria')->get();
        return view('site.mediateca.list.index',compact('categorias','categoria'));
    }
    public function store(Request $request)
    {
        $mensagens = [
            'required' => 'O :attribute é obrigatório!',
            'ficheiro.mimes' => 'O formato válido é o : PDF',

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
    public function ViewCategory($categoria)
    {
       $ficheiros = Mediateca::where('categoria','=',$categoria)->get();
       dd($ficheiros);
       return view('site.mediateca.index.index');
    }
}
