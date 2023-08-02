<?php

namespace App\Http\Controllers;
use App\Models\Gabarito;
use App\Models\Course;
use App\Models\Update;
use Illuminate\Http\Request;

class SiteController extends Controller
{
   public function index()
   {
    $data['gabaritos']= Gabarito::orderBy('id','DESC')->first();
    $data['cursos'] = Course::orderBy('id','DESC')->get();
    $data['updates'] = Update::orderBy('id','DESC')->limit(3)->get();
    return view('site.welcome',$data);
   }
   public function updatesList($id)
   {
      $updates= Update::find($id);
          return view('site.update.index',compact('updates'))->with('i', (request()->input('page', 1) - 1) * 5);
   }
}
