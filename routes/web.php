<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MediatecaController;
use App\Http\Controllers\SiteController;
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

Route::get('/',[SiteController::class,'index'])->name('site');
//Updates
Route::get('updates/list/{id}',[SiteController::class,'updatesList'])->name('updatesList');
//Mediateca
Route::get('mediate_valia',[MediatecaController::class,'index'])->name('mediateca');
Route::post('mediateca_valia/store', [MediatecaController::class, 'store'])->name('storemediateca');
Route::get('mediate_valia/view_category/{categoria}',[MediatecaController::class,'ViewCategory'])->name('ViewCategory');



