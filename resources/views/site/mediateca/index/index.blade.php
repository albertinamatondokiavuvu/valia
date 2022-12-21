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
                            <a class="nav-link" href="{{ route('mediateca') }}"><i class="bi bi-arrow-return-left"></i>
                                Voltar a página anterior</a>
                        </li>

                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane container active" id="inicio">

                            <table id="example" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>

                                        <th>Categoria: @isset($fic->categoria)
                                            {{ $fic->categoria }}
                                            @else
                                            0
                                        @endisset  </th>

                                    </tr>
                                </thead>
                                <tbody>
@isset($ficheiros)



                                    @foreach ($ficheiros as $ficheiros)
                                    <tr>

                                        <td>

                                            <div class="row">
                                                <div class="col-md-9">
                                                    <a href="{{ route('ListC',$ficheiros->id) }}"> <i  class="bi bi-file-pdf"></i> {{ $ficheiros->titulo }} </a>
                                                </div>
                                                <div class="col-md-3">
                                                    <a href="{{ route('donwloadSoma',$ficheiros->id) }}" ><i class="bi bi-download"></i> Download</a>
                                                </div>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="row">
                                                <div class="col-md-9">
                                                  {{ $ficheiros->titulo }} (<?php $path =getcwd().'/storage/'.$ficheiros->ficheiro;
                                                  $pdf = file_get_contents($path);
                                                  $number = preg_match_all("/\/Page\W/", $pdf, $dummy);
                                                  echo $number;?> pág.)
                                                </div>
                                                <div class="col-md-3">
                                                    Criação <span style="padding-left:10%;">  {{ $ficheiros->created_at }}</span> <br>
                                                    Tamanho  <span style="padding-left:5%; "><?php

                                                    // Exibe arquivo com o tamanho
                                                    $decimals = 0;
                                                    $filename = getcwd().'/storage/'.$ficheiros->ficheiro;
                                                    $bytes= filesize($filename);
                                                    $sz = 'BKMGTP';
                                                    $factor = floor((strlen($bytes) - 1) / 3);
                                                    echo sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . @$sz[$factor].'B';

                                                    ?>  </span> <br>

                                                    Downloads <span style="padding-left:3%; ">{{ $ficheiros->donw }}</span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @endisset
                                </tbody>

                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </main><!-- End #main -->

    @include('layouts.site.footer')

@endsection
