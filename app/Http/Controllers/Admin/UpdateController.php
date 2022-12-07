<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Update;

class UpdateController extends Controller
{
    public function list($id)
    {

            $response['updates'] = Update::find($id);
            return view('admin.update.index', $response)->with('i', (request()->input('page', 1) - 1) * 5);;

    }
    public function index()
    {
        try {
            $updates = Update::get();
            return view('admin.update.list.index', compact('updates'))->with('i', (request()->input('page', 1) - 1) * 5);
        } catch (\Exception $exception) {
            return redirect()->back()->with('status_Error', '1');
        }
    }
   public function create()
   {
   return view('admin.update.create.index');
   }
   public function store(Request $request)
   {

       $mensagens = [
           'required' => 'O :attribute é obrigatório!',
           'foto.mimes' => 'Formato inválido, os formatos válidos são: jpeg, jpg e png ',
       ];
       $request->validate(
           [

               'foto' => 'required|mimes:jpeg,jpg,png',
               'titulo'=>'required',
              'resumo'=>'required',
              'data'=>'required',
               'categoria'=>'required',
           ],
           $mensagens
       );
       try {
           if ($request->hasFile('foto')) {
               $file = $request->file('foto');
               $fileName = 'foto-' . time() . '.' . $file->getClientOriginalExtension();
               $dados['foto'] = $file->storeAs('foto', $fileName);
           } else {
               $dados['foto'] = $request->curso;
           }

         Update::create([

               'foto' => $dados['foto'],
               'titulo'=>$request->titulo,
              'resumo'=>$request->resumo,
              'data'=>$request->data,
               'categoria'=>$request->categoria,

           ]);

           return redirect()->back()->with('CursoAdd', '1');
       } catch (\Exception $exceptio) {
           return redirect()->back()->with('status_error', '1');
       }
   }
   public function edit($id)
   {
       try {
           $updates = Update::find($id);
           return view('admin.Update.edit.index', compact('updates'));
       } catch (\Exception $exception) {
           return redirect()->back()->with('status_Error', '1');
       }
   }
   public function update(Request $request, $id)
   {
       $mensagens = [
           'required' => 'O :attribute é obrigatório!',
           'foto.mimes' => 'Formato inválido, os formatos válidos são: jpeg, jpg e png ',


       ];
       $request->validate(
           [

               'foto' => 'required|mimes:jpeg,jpg,png',
               'titulo'=>'required',
               'resumo'=>'required',
               'data'=>'required',
                'categoria'=>'required',

           ],
           $mensagens
       );
       try {
           if ($request->hasFile('foto')) {
               $file = $request->file('foto');
               $fileName = 'foto-' . time() . '.' . $file->getClientOriginalExtension();
               $dados['foto'] = $file->storeAs('foto', $fileName);
           } else {
               $dados['foto'] = $request->titulo;
           }

           Update::find($id)->update([

               'foto' => $dados['foto'],
               'titulo'=>$request->titulo,
               'resumo'=>$request->resumo,
               'data'=>$request->data,
                'categoria'=>$request->categoria,

           ]);
           return redirect()->back()->with('programUpdate', '1');
       } catch (\Exception $exceptio) {
           return redirect()->back()->with('status_error', '1');
       }
   }
   public function destroy($id)
   {
       try {
           $updates = Update::findOrFail($id);
           $updates->delete();

           return redirect()->back()->with('status_delete', '1');
       } catch (\Exception $exceptio) {
           return redirect()->back()->with('status_error', '1');
       }
   }
}
