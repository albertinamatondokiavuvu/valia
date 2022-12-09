<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index()
    {
        try {
            $categorias = Categoria::get();
            return view('admin.categoria.list.index', compact('categorias'))->with('i', (request()->input('page', 1) - 1) * 5);
        } catch (\Exception $exception) {
            return redirect()->back()->with('status_Error', '1');
        }
    }
   public function create()
   {
   return view('admin.categoria.create.index');
   }
   public function store(Request $request)
   {

       $mensagens = [
           'required' => 'O :attribute é obrigatório!',
       ];
       $request->validate(
           [
              'area'=>'required',
              'categoria'=>'required',
           ],
           $mensagens
       );
      try{

         Categoria::create([

               'area' => $request->area,
               'categoria' => $request->categoria,

           ]);

           return redirect()->back()->with('CursoAdd', '1');
       } catch (\Exception $exceptio) {
           return redirect()->back()->with('status_error', '1');
       }
   }
   public function edit($id)
   {
       try {
           $categorias = Categoria::find($id);
           return view('admin.categoria.edit.index', compact('categorias'));
       } catch (\Exception $exception) {
           return redirect()->back()->with('status_Error', '1');
       }
   }
   public function Categoria(Request $request, $id)
   {

    $mensagens = [
        'required' => 'O :attribute é obrigatório!',
    ];
    $request->validate(
        [
           'area'=>'required',
           'categoria'=>'required',
        ],
        $mensagens
    );
    try {


           Categoria::find($id)->Categoria([

            'area' => $request->area,
            'categoria' => $request->categoria,

           ]);
           return redirect()->back()->with('programCategoria', '1');
       } catch (\Exception $exceptio) {
           return redirect()->back()->with('status_error', '1');
       }
   }
   public function destroy($id)
   {
       try {
           $categorias = Categoria::findOrFail($id);
           $categorias->delete();

           return redirect()->back()->with('status_delete', '1');
       } catch (\Exception $exceptio) {
           return redirect()->back()->with('status_error', '1');
       }
   }
}
