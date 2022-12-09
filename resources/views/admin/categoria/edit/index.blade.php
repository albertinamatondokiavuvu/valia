@extends('layouts.layoutadmin')

@section('content')
<div class="pcoded-content">
    <!-- Page-header start -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Categoria</h5>
                        <p class="m-b-0">Edite o Gabarito</p>

                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('site') }}"> <i class="fa fa-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Categoria</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Editar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-header-left">
                        <h5>Editar Gabarito</h5>
                        <br>
                        <small style="text-align: left; font-weight:bold;">Campos com <small style="color: red;">*</small> são campos obrigatórios</small>
                    </div>
                    <div class="card-header-right">
                        <ul class="list-unstyled card-option">
                            <li><i class="fa fa fa-wrench open-card-option"></i></li>
                            <li><i class="fa fa-window-maximize full-card"></i></li>
                            <li><i class="fa fa-minus minimize-card"></i></li>
                            <li><i class="fa fa-refresh reload-card"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="card-block">
                    <!-- button Default -->
                    <form action="{{ route('updatecategoria',$categorias->id) }}" class="row" method="POST" enctype="multipart/form-data">
                        @csrf
                        @include('forms._FormCategoria.index')
                        <div class="form-group col-md-3">
                            <label for="" class="form-label text-white">.</label>
                            <button class="form-control btn  text-white" style="background:#2d58a8">Actualizar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection

