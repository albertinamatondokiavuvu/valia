<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
class CourseController extends Controller
{
    public function index()
    {
        try {
            $cursos = Course::get();
            return view('admin.course.list.index', compact('cursos'))->with('i', (request()->input('page', 1) - 1) * 5);
        } catch (\Exception $exception) {
            return redirect()->back()->with('status_Error', '1');
        }
    }
   public function create()
   {
   return view('admin.course.create.index');
   }
   public function store(Request $request)
   {

       $mensagens = [
           'required' => 'O :attribute é obrigatório!',
           'foto.mimes' => 'Formato inválido, os formatos válidos são: jpeg, jpg e png ',
           'resumo.mimes' => 'Formato inválido, o formato válido é: pdf ',

       ];
       $request->validate(
           [

               'foto' => 'required|mimes:jpeg,jpg,png',
               'resumo' => 'required|mimes:pdf',
               'curso' => 'required',

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

           if ($request->hasFile('resumo')) {
               $file1 = $request->file('resumo');
               $fileName = 'resumo-' . time() . '.' . $file1->getClientOriginalExtension();
               $dados['resumo'] = $file1->storeAs('resumo', $fileName);
           } else {
               $dados['resumo'] = $request->curso;
           }
         Course::create([

               'foto' => $dados['foto'],
               'resumo' => $dados['resumo'],
               'curso' => $request->curso,

           ]);

           return redirect()->back()->with('CursoAdd', '1');
       } catch (\Exception $exceptio) {
           return redirect()->back()->with('status_error', '1');
       }
   }
   public function edit($id)
   {
       try {
           $cursos = Course::find($id);
           return view('admin.course.edit.index', compact('cursos'));
       } catch (\Exception $exception) {
           return redirect()->back()->with('status_Error', '1');
       }
   }
   public function update(Request $request, $id)
   {
       $mensagens = [
           'required' => 'O :attribute é obrigatório!',
           'foto.mimes' => 'Formato inválido, os formatos válidos são: jpeg, jpg e png ',
           'resumo.mimes' => 'Formato inválido, o formato válido é: pdf ',

       ];
       $request->validate(
           [

               'foto' => 'required|mimes:jpeg,jpg,png',
               'resumo' => 'required|mimes:pdf',
               'curso' => 'required',

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

           if ($request->hasFile('resumo')) {
               $file1 = $request->file('resumo');
               $fileName1 = 'resumo-' . time() . '.' . $file1->getClientOriginalExtension();
               $dados['resumo'] = $file1->storeAs('resumo', $fileName1);
           } else {
               $dados['resumo'] = $request->curso;
            }

           Course::find($id)->update([

               'foto' => $dados['foto'],
               'resumo' => $dados['resumo'],
               'curso' => $request->curso,

           ]);

           return redirect()->back()->with('programUpdate', '1');
       } catch (\Exception $exceptio) {
           return redirect()->back()->with('status_error', '1');
       }
   }
   public function destroy($id)
   {
       try {
           $cursos = Course::findOrFail($id);
           $cursos->delete();
           return redirect()->back()->with('status_delete', '1');
       } catch (\Exception $exceptio) {
           return redirect()->back()->with('status_error', '1');
       }
   }
}
