<?php

namespace App\Http\Controllers\Admin;
use App\Models\Gabarito;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GabaritoController extends Controller
{
    public function index()
    {
        try {
            $gabaritos = Gabarito::get();
            return view('admin.gabarito.list.index', compact('gabaritos'))->with('i', (request()->input('page', 1) - 1) * 5);
        } catch (\Exception $exception) {
            return redirect()->back()->with('status_Error', '1');
        }
    }
   public function create()
   {
   return view('admin.gabarito.create.index');
   }
   public function store(Request $request)
   {

       $mensagens = [
           'required' => 'O :attribute é obrigatório!',
           'capa.mimes' => 'Formato inválido, os formatos válidos são: jpeg, jpg e png ',
           'documento.mimes' => 'Formato inválido, o formato válido é: pdf ',
       ];
       $request->validate(
           [

               'capa' => 'required|mimes:jpeg,jpg,png',
               'documento'=>'required|mimes:pdf',
              'titulo'=>'required',
           ],
           $mensagens
       );
       try {
           if ($request->hasFile('capa')) {
               $file = $request->file('capa');
               $fileName = 'capa-' . time() . '.' . $file->getClientOriginalExtension();
               $dados['capa'] = $file->storeAs('capa', $fileName);
           } else {
               $dados['capa'] = $request->titulo;
           }
           if ($request->hasFile('documento')) {
            $file1 = $request->file('documento');
            $fileName1 = 'documento-' . time() . '.' . $file1->getClientOriginalExtension();
            $dados['documento'] = $file->storeAs('documento', $fileName1);
        } else {
            $dados['documento'] = $request->titulo;
        }

         Gabarito::create([

               'capa' => $dados['capa'],
               'documento' => $dados['documento'],
               'titulo'=>$request->titulo,

           ]);

           return redirect()->back()->with('CursoAdd', '1');
       } catch (\Exception $exceptio) {
           return redirect()->back()->with('status_error', '1');
       }
   }
   public function edit($id)
   {
       try {
           $gabaritos = Gabarito::find($id);
           return view('admin.gabarito.edit.index', compact('gabaritos'));
       } catch (\Exception $exception) {
           return redirect()->back()->with('status_Error', '1');
       }
   }
   public function Gabarito(Request $request, $id)
   {
    $mensagens = [
        'required' => 'O :attribute é obrigatório!',
        'capa.mimes' => 'Formato inválido, os formatos válidos são: jpeg, jpg e png ',
        'documento.mimes' => 'Formato inválido, o formato válido é: pdf ',
    ];
    $request->validate(
        [

            'capa' => 'required|mimes:jpeg,jpg,png',
            'documento'=>'required|mimes:pdf',
           'titulo'=>'required',
        ],
        $mensagens
    );
    try {
        if ($request->hasFile('capa')) {
            $file = $request->file('capa');
            $fileName = 'capa-' . time() . '.' . $file->getClientOriginalExtension();
            $dados['capa'] = $file->storeAs('capa', $fileName);
        } else {
            $dados['capa'] = $request->titulo;
        }
        if ($request->hasFile('documento')) {
         $file1 = $request->file('documento');
         $fileName1 = 'documento-' . time() . '.' . $file1->getClientOriginalExtension();
         $dados['documento'] = $file->storeAs('documento', $fileName1);
     } else {
         $dados['documento'] = $request->titulo;
     }

           Gabarito::find($id)->Gabarito([

            'capa' => $dados['capa'],
            'documento' => $dados['documento'],
            'titulo'=>$request->titulo,

           ]);
           return redirect()->back()->with('programGabarito', '1');
       } catch (\Exception $exceptio) {
           return redirect()->back()->with('status_error', '1');
       }
   }
   public function destroy($id)
   {
       try {
           $gabaritos = Gabarito::findOrFail($id);
           $gabaritos->delete();

           return redirect()->back()->with('status_delete', '1');
       } catch (\Exception $exceptio) {
           return redirect()->back()->with('status_error', '1');
       }
   }
}
