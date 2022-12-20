
@extends('layouts.layoutadmin')

@section('content')
<div class="pcoded-content">
    <!-- Page-header start -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Actualizações</h5>
                        <p class="m-b-0">Listar Actualizações</p>

                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('site') }}"> <i class="fa fa-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Actualizações</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Listar</a>
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
                        <h5>Listar Actualizações</h5>


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
                    <table id="table_id" class="display expandable-table" style="width:100%">
                        <thead class="thead-dark">
                            <th>Nº</th>
                            <th class="text-center">Foto</th>
                            <th class="text-center">Titulo</th>
                            <th class="text-center">Categoria</th>
                            <th class="text-center">Data</th>
                            <th>Acções</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white ">
                            @foreach ($updates as $updates)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td class="text-center"><img src="/storage/{{ $updates->foto }}" width="50" height="50" alt=""></td>
                                <td class="text-center">{{ $updates->titulo }}</td>
                                <td class="text-center">{{ $updates->categoria }}</td>
                                <td class="text-center">{{ $updates->data }}</td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-clone" aria-hidden="true"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item btn btn-secondary "

                                            href="{{ route('listupdate',$updates->id) }}">Visualizar</a>
                                            <a class="dropdown-item btn btn-secondary "

                                            href="{{ route('editupdate',$updates->id) }}">Editar</a>
                                            <form action="{{ route('deleteupdate',$updates->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')

                                                <a class="dropdown-item btn btn-secondary remove-user"
                                                    data-confirm="Tem certeza que deseja eliminar?"
                                                    href="{{ route('deleteupdate',$updates->id) }}">Eliminar</a>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

@endsection


