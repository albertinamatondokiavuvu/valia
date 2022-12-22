@extends('layouts.site.header')
@section('title', ' - mediateca de formadores')
@section('content')
    @include('layouts.modal.site')

    <style>
        #dataTables_Filter input {
            margin-left: 10%;
        }
    </style>

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex justify-cntent-center align-items-center">
        <div id="heroCarousel" data-bs-interval="7000" class="container carousel carousel-fade" data-bs-ride="carousel">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">Mediateca <b>Valia.ao</b> </h2>
                    <p class="animate__animated animate__fadeInUp">
                        Mediateca de formação para formadores e professores
                        de acesso livre e gratuito. Faça o download de milhares
                        de Recursos Formativos / Educativos Abertos (manuais, ficheiros e apresentações PowerPoint).
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">Mediateca <b>Valia.ao</b> </h2>
                    <p class="animate__animated animate__fadeInUp">
                        Mediateca de formação para formadores e professores
                        de acesso livre e gratuito. Faça o download de milhares
                        de Recursos Formativos / Educativos Abertos (manuais, ficheiros e apresentações PowerPoint).
                    </p>
                </div>
            </div>


            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
            </a>

        </div>
    </section><!-- End Hero -->


    <main id="main">
        <section style="margin-top: 80px;">
            <div class="container aos-init aos-animate" data-aos="fade-up">
                <div class="container justify-content-center" style="margin-top: 10px;">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#inicio"><i class="bi bi-house-fill"></i>
                                Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#file"><i
                                    class="bi bi-file-earmark-plus-fill"></i> Enviar ficheiro</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#hist"><i class="bi bi-folder-fill"></i>
                                histórico</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#est"><i class="bi bi-bar-chart-fill"></i>
                                Estatística</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#ajuda"><i
                                    class="bi bi-question-circle-fill"></i> Ajuda</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane container active" id="inicio">

                            <table id="example" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Número de Categorias: @isset($categorias)
                                            {{ $categorias }}
                                            @else
                                            0
                                        @endisset  </th>

                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($categoria as $categoria)
                                    <tr>

                                        <td>
                                            <div class="row">
                                                <div class="col-9">
                                                    <a href="{{ route('ViewCategory',$categoria->categoria) }}"> <img src="" alt=""> {{ $categoria->categoria }} </a>
                                                </div>
                                                <div class="col-3">
                                                    ficheiros: {{ $categoria->ficheiro }}
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach


                                </tbody>

                            </table>
                        </div>
                        <div class="tab-pane container fade" id="file">
                            <div class="col-8 justify-content-center">
@if(Auth::check())


                                <form action="{{ route('storemediateca') }}" class="row" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group col-md-6">
                                        <label for="fotografia" class="form-label">Fotografia <small
                                                style="color: red;">*</small></label>
                                        <input value="{{ old('ficheiro') }}"
                                            type="file" name="fotografia" class="form-control" id="fotografia">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="nomeCompleto" class="form-label">Nome Completo <small
                                                style="color: red;">*</small></label>
                                        <input value="{{ old('titulo') }}"
                                            type="text"
                                            name="nomeCompleto" class="form-control" id="nomeCompleto">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="cv" class="form-label">Curriculum Vitae
                                            <small style="color: red;">*</small></label>
                                        <input value="{{ old('ficheiro') }}"
                                            type="file" name="cv" class="form-control" id="cv">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="email" class="form-label">email <small
                                                style="color: red;">*</small></label>
                                        <input value="{{ old('titulo') }}"
                                            type="email"
                                            name="email" class="form-control" id="email">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="areaFormacao" class="form-label">Area de formação
                                            <small style="color: red;">*</small></label>
                                        <input value="{{ old('ficheiro') }}"
                                            type="text" name="areaFormacao" class="form-control" id="areaFormacao">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="categoria" class="form-label ">Categoria <small
                                                style="color: red;">*</small></label>
                                        <select style="color:black;!importante" class="form-control select2"
                                            name="categoria" id="categoria">

                                            <option selected disabled value="">Selecione:</option>

                                            <option value="Bilhete de Identidade">Bilhete de Identidade</option>
                                            <option value="Passaporte">Passaporte</option>
                                            <option value="Cédula Pessoal">Cédula Pessoal</option>
                                        </select>
                                    </div>
                                                                     
                                    <div class="form-group col-md-12">
                                        <label for="localidade" class="form-label">Localidade 
                                            <small style="color: red;">*</small></label>
                                        <input value="{{ old('ficheiro') }}"
                                            type="text" name="localidade" class="form-control" id="localidade">
                                    </div>
                                    
                                    
                                    <button type="submit" class="btn btn-primary">Carregar</button>
                                </form> 
                                @else
                                <br>
                                <p>Esta funcionalidade requer login</p>
                                @endisset
                            </div>

                        </div>
                        <div class="tab-pane container fade" id="hist">This is a setting tab.</div>
                        <div class="tab-pane container fade" id="est">This is a profile tab.</div>
                        <div class="tab-pane container fade" id="ajuda">This is a setting tab.</div>
                    </div>
                </div>
            </div>
        </section>
    </main><!-- End #main -->


    @include('layouts.site.footer')
@endsection
