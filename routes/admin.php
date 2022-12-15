<?php
use App\Http\Controllers\Admin\GabaritoController;
use App\Http\Controllers\admin\UpdateController;
use App\Http\Controllers\Admin\CourseController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('auth')->group(function () {

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

 //BEGINNING OF COURSE
 Route::get('dashboard/index_course', [CourseController::class, 'index'])->name('indexcourse');
 Route::get('dashboard/create_course', [CourseController::class, 'create'])->name('createcourse');
 Route::post('dashboard/store_course', [CourseController::class, 'store'])->name('storecourse');
 Route::get('dashboard/edit_course/{id}', [CourseController::class, 'edit'])->name('editcourse');
 Route::post('dashboard/update_course/{id}', [CourseController::class, 'update'])->name('updatecourse');
 Route::get('dashboard/delete_course/{id}', [CourseController::class, 'destroy'])->name('deletecourse');
 //END OF COURSE
  //BEGINNING OF UPDATE
  Route::get('dashboard/create_update', [UpdateController::class, 'create'])->name('createupdate');
  Route::post('dashboard/store_update', [UpdateController::class, 'store'])->name('storeupdate');
  Route::get('dashboard/edit_update/{id}', [UpdateController::class, 'edit'])->name('editupdate');
  Route::post('dashboard/update_update/{id}', [UpdateController::class, 'update'])->name('updateupdate');
  Route::get('dashboard/index_update', [UpdateController::class, 'index'])->name('indexupdate');
  Route::get('dashboard/delete_update/{id}', [UpdateController::class, 'destroy'])->name('deleteupdate');
  Route::get('dashboard/show_update/{id}', [UpdateController::class, 'list'])->name('listupdate');
  //END OF UPDATE
   //BEGINNING OF COURSE
 Route::get('dashboard/index_gabarito', [GabaritoController::class, 'index'])->name('indexgabarito');
 Route::get('dashboard/create_gabarito', [GabaritoController::class, 'create'])->name('creategabarito');
 Route::post('dashboard/store_gabarito', [GabaritoController::class, 'store'])->name('storegabarito');
 Route::get('dashboard/edit_gabarito/{id}', [GabaritoController::class, 'edit'])->name('editgabarito');
 Route::post('dashboard/update_gabarito/{id}', [GabaritoController::class, 'update'])->name('updategabarito');
 Route::get('dashboard/delete_gabarito/{id}', [GabaritoController::class, 'destroy'])->name('deletegabarito');
 //END OF COURSE
   //BEGINNING OF MEDIATECA
   Route::get('dashboard/index_gabarito', [GabaritoController::class, 'index'])->name('indexgabarito');
   Route::get('dashboard/create_gabarito', [GabaritoController::class, 'create'])->name('creategabarito');
   Route::post('dashboard/store_gabarito', [GabaritoController::class, 'store'])->name('storegabarito');
   Route::get('dashboard/edit_gabarito/{id}', [GabaritoController::class, 'edit'])->name('editgabarito');
   Route::post('dashboard/update_gabarito/{id}', [GabaritoController::class, 'update'])->name('updategabarito');
   Route::get('dashboard/delete_gabarito/{id}', [GabaritoController::class, 'destroy'])->name('deletegabarito');
   //END OF MEDIATECA
});
