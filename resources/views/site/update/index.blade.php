@extends('layouts.site.header')
@section('title', ' - actualizações')
@section('content')
    @include('layouts.modal.site')

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
            <div class="section-title">
                <h2>{{ $updates->categoria }}</h2>
            </div>
            <div class="container aos-init aos-animate" data-aos="fade-up">
                <div class="container justify-content-center" style="margin-top: 10px;">
                    <div class="row gy-4">

                        <div class="col-lg-4">
                            <img src="/storage/{{ $updates->foto }}" class="d-block w-100" alt="...">
                        </div>

                        <div class="col-lg-8">
                            <div class="portfolio-info">
                                <h3>{{ $updates->titulo }} / <small>{{ $updates->data }}</small> </h3>

                            </div>
                            <div class="portfolio-description">
                                <p>
                                    {{ $updates->resumo }}
                                </p>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>
    </main><!-- End #main -->


    @include('layouts.site.footer')
@endsection
