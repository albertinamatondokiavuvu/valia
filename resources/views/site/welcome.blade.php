@extends('layouts.site.header')
@section('title', ' - pagina inicial')
@section('content')
    @include('layouts.modal.site')
    <style>
        @import url("https://use.fontawesome.com/releases/v5.13.0/css/all.css");
        .imgC1 {

    transition: 1s;
}
.imgC1:hover {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    transition: 1s;
}
.imgC {
  opacity: 0.5;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  transition:  1s;
}

.imgC:hover {
  opacity: 1.0;
  transform:  scale(1,2);

}

.card .image {
    width: 100%;
    height: 100%;
    overflow: hidden;
}
.card .image img {
    width: 100%;
    transition: .5s;
}
.card:hover .image img {
    opacity: .5;
    transform: translateX(30%);/*100%*/
}
.card .details {
    position: absolute;
    top: 0;
    left: 0;
    width: 70%;/*100%*/
    height: 100%;
    background: #07b9ff;
    transition: .5s;
    transform-origin: left;
    transform: perspective(2000px) rotateY(-90deg);
}
.card:hover .details {
    transform: perspective(2000px) rotateY(0deg);
}
.card .details .center {
    padding: 20px;
    text-align: center;
    background: #fff;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
}
.card .details .center h1 {
    margin: 0;
    padding: 0;
    color: #ff3636;
    line-height: 20px;
    font-size: 20px;
    text-transform: uppercase;
}
.card .details .center h1 span {
    font-size: 14px;
    color: #262626;
}
.card .details .center p {
    margin: 10px 0;
    padding: 0;
    color: #262626;
}
.card .details .center ul {
    margin: 10px auto 0;
    padding: 0;
    display: table;
}
.card .details .center ul li {
    list-style: none;
    margin: 0 5px;
    float: left;
}
.card .details .center ul li a {
    display: block;
    background: #262626;
    color: #fff;
    width: 30px;
    height: 30px;
    line-height: 30px;
    text-align: center;
    transform: .5s;
}
.card .details .center ul li a:hover {
    background: #07b9ff;
}

        .btn-archive {
            color: var(--tx-button);
            background: var(--bg-button);
            border-color: var(--bg-button-border);

            -webkit-transition: all .3s linear 0s;
            transition: all .3s linear 0s;

        }

        .custom-slider {
            font-family: var(--font1);
            background: var(--bg-slider-section);
            -webkit-transition: all .3s linear 0s;
            transition: all .3s linear 0s;
        }



        .attached {
            font-weight: 300;
            font-size: .8rem;
        }


        .card-title {
            line-height: 35px;
            text-align: center;
            color: var(--tx-slider-card-4);
        }


        .card-footer {
            background: var(--bg-col-2);
            text-align: center;
        }
    </style>
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex justify-cntent-center align-items-center">
        <div id="heroCarousel" data-bs-interval="7000" class="container carousel carousel-fade" data-bs-ride="carousel">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">Bem-vindo ao <span>Valia.ao</span></h2>
                    <p class="animate__animated animate__fadeInUp">A <strong>Valia.ao</strong> é uma plataforma digital que
                        vai ajudá-lo nas suas necessidades de avalição.
                        Aqui você terá oportunidades únicas para a sua formação e entre outros recursos que a valia
                        disponibiliza.
                        É uma Empresa Privada com uma visão futurística e proactiva de capital 100% angolano, fundada em
                        2021 ,
                        que desenvolve a sua intervenção de acordo com as necessidades e especificidade do mercado.
                    </p>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">Valia.ao</h2>
                    <p class="animate__animated animate__fadeInUp">
                        Pioneira no segmento da Avaliação Educacional , de Desempenho profissional e institucional,
                        realização de testes ,
                        Desenvolvimento de Pesquisa em Avaliação , Gestão de processo de recrutamento de gestores e
                        professores , admissão
                        de alunos , preparação para testes no ensino superior, soluções tecnológicas para e avaliação do
                        Ensino à distância,
                        tutoria para os alunos.
                    </p>

                </div>
            </div>


            <!-- Slide 3 -->
            <div class="carousel-item">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">Valia.ao</h2>
                    <p class="animate__animated animate__fadeInUp">Também incrementamos Projetos inovadores que satisfaçam
                        as necessidades identificadas. Movidos
                        pela missão de promover a qualidade e a equidade na educação e formação , a VALIA.AO,
                        sendo uma organização independente e dedicada à pesquisa, fornece soluções confiáveis que ajudam a
                        orientar indivíduos.
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
        <!-- ======= Icon Boxes Section ======= -->
        <section id="icon-boxes" class="icon-boxes">
            <div class="container ">

                <div class="row">
                    <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4 class="title"><a href="">Missão</a></h4>
                            <p class="description">Promover a qualidade e a equidade na avaliação, fornecimento
                                testes padronizados... <a href="">Ler mais</a></p>

                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up"
                        data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4 class="title"><a href="">Vissão</a></h4>
                            <p class="description">Ser reconhecido como pioneira e líder no segmento de avaliações e
                                fornecimento
                                de testes padronizados...</p>
                            <a href="">Ler mais</a>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4 class="title"><a href="">Valores</a></h4>
                            <p class="description">Primamos pela Inovação, Responsabilidade social,
                                integridade, equidade, oportunidade e qualidade. A VALIA.AO pratica esses valores ouvindo e
                                aprendendo com todos.</p>
                        </div>
                    </div>


                </div>

            </div>
        </section><!-- End Icon Boxes Section -->

        <!-- ======= Team Section ======= -->
        <section id="service" class="team section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Serviços</h2>
                    <p>Consulte um especialista Confiável Hoje</p>
                </div>
                <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">

                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">

                            <div class="row">

                                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                                    <div class="member d-flex align-items-start">

                                        <div class="member-info">
                                            <h4> VALIA.Lic</h4>
                                            <span></span>
                                            <p>O VALIA.LIc é um serviço especializado em licenciamento ... <a
                                                    href="">Ler mais</a></p>


                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
                                    <div class="member d-flex align-items-start">

                                        <div class="member-info">
                                            <h4>Valia.Estágios</h4>
                                            <span></span>
                                            <p>Através de nossos parceiros a VALIA.AO oferece a... <a href="">Ler
                                                    mais</a></p>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
                                    <div class="member d-flex align-items-start">
                                        <div class="member-info">
                                            <h4>Valia.Max</h4>
                                            <span></span>
                                            <p>Realizar avaliações rigorosas baseadas em pesquisas e
                                                ... <a href="">Ler mais</a>


                                            </p>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">

                                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                                    <div class="member d-flex align-items-start">

                                        <div class="member-info">
                                            <h4> VALIA.Impulso</h4>
                                            <span></span>
                                            <p>É um serviço de parceria com outras empresa, onde incrementamos o ... <a
                                                    href="">Ler mais</a></p>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
                                    <div class="member d-flex align-items-start">

                                        <div class="member-info">
                                            <h4>Valia.Recrutamento</h4>
                                            <span></span>
                                            <p>través do VALIA.Recrumanto e apoiamos as instituições no processo de ... <a
                                                    href="">Ler mais</a></a></p>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
                                    <div class="member d-flex align-items-start">
                                        <div class="member-info">
                                            <h4>Valia.Soluções</h4>
                                            <span></span>
                                            <p>Em através dos nos parceiros, e utilizando metodologias apoiadas por ... <a
                                                    href="">Ler mais</a>

                                            </p>


                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
                                    <div class="member d-flex align-items-start">
                                        <div class="member-info">
                                            <h4>Valia.Formação</h4>
                                            <span></span>
                                            <p>
                                                Deixe que a mais confiável empresa pioneira no segmento de avaliação atenda
                                                ás
                                                ... <a href="" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">Ler mais</a>

                                            </p>


                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
                                    <div class="member d-flex align-items-start">
                                        <div class="member-info">
                                            <h4>Valia.Gest</h4>
                                            <span></span>
                                            <p>
                                                Deixe que a mais confiável empresa pioneira no segmento de avaliação atenda
                                                ás
                                                ... <a href="" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">Ler mais</a>

                                            </p>


                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
                                    <div class="member d-flex align-items-start">
                                        <div class="member-info">
                                            <h4>Valia.Consultoria</h4>
                                            <span></span>
                                            <p>
                                                Deixe que a mais confiável empresa pioneira no segmento de avaliação atenda
                                                ás
                                                ... <a href="" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">Ler mais</a>

                                            </p>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Team Section -->
        <!-- ======= Cta Section ======= -->
        <!-- ======= Contact Section ======= -->
        <section id="course">
            <div class="section-title">
                <div class="section-title">
                    <h2>cursos</h2>
                    <p>Consulte um especialista Confiável Hoje</p>
                </div>
            </div>
            <div class="container">
                <div class="container">
                    <div class="row">

                        <div class="col clearfix">
                            <span class="title-section d-flex justify-content-end">

                                <button class="btn btn-archive btn-sm prev-btn" type="button"><i
                                        class="fas fa-arrow-left"></i>
                                    <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
                                    <span class="visually-hidden">Previous</span>
                                </button><span class="mx-1">&nbsp;</span>
                                <button class="btn btn-archive btn-sm next-btn" type="button"><i
                                        class="fas fa-arrow-right"></i>
                                    <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Slider main container -->
                <div class="swiper-container">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        @isset($cursos)
                        <?php foreach( $cursos as $key=>$cursos): ?>
                        <div class="swiper-slide">
                            <div class="col">
                                <div class="card" >
                                    <img class="card-img-top" src="/storage/{{ $cursos->foto }}" alt="Card image cap">
                                    <div class="card-body">
                                      <h5 class="card-title">{{ $cursos->curso }}</h5>
                                      <p class="card-text">
                                        <span class="attached"><a target="_blank" href="/storage/{{ $cursos->resumo }}"><i class="fas fa-paperclip"></i> Resumo do Curso</a></span>
                                      </p>
                                      <a href="#" class="btn btn-primary">Pré-Inscrição</a>
                                    </div>
                                  </div>

                            </div>
                        </div>
                        <?php endforeach; ?>
                        @endisset

                    </div>

                </div>
            </div>
        </section>
        <section id="cta" class="cta">

            <div class="container">


                <div class="row" data-aos="zoom-in">
                    <div class="col-lg-12 text-center text-lg-center">
                        <div class="row">
                            <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
                                <div class="icon-box">
                                    <div class="icon"><img src="/img/Graduation Cap_100px.png" alt=""
                                            srcset=""></div>
                                    <h4 class="title"><a style="color: white;" href="">Filosofia</a></h4>
                                    <p class="description" style="text-align: justify;">Nossa filosofia baseia-se no
                                        compromisso com a avaliação, o que inspira
                                        a nossa natureza e missão de promoLer a qualidade e a equidade na educação.</p>

                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up"
                                data-aos-delay="100">
                                <div class="icon-box">
                                    <div class="icon"><img src="/img/Hand With Pen_100px.png" alt=""
                                            srcset=""></div>
                                    <h4 class="title"><a style="color: white;" href="">Estratégia</a></h4>
                                    <p class="description" style="text-align: justify;">Alargar as oportunidades de
                                        crescimentos para alunos
                                        e para as empresas por meio de métodos de avaliação mais informados e objetivos.</p>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up"
                                data-aos-delay="200">
                                <div class="icon-box">
                                    <div class="icon"><img src="/img/Organization_100px.png" alt=""
                                            srcset=""></div>
                                    <h4 class="title"><a style="color: white;" href="">Foco</a></h4>
                                    <p class="description" style="text-align: justify;">Nosso foco está nos
                                        relacionamentos que construímos com organizações com ideias semelhantes e pioneiros
                                        em tecnologia educacional, aprofundando nossas capacidades técnicas.</p>

                                </div>
                            </div>


                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Cta Section -->
        <!-- ======= Why Us Section ======= -->

        <!-- ======= Contact Section ======= -->
        <section id="Galeria" class="">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Galeria</h2>
                </div>
                <div class="row mt-1">

                    <div class="col-lg-5">
                        <h5>Mensagem do Fundador</h5>
                        <div class="info">
                            <div class="card">
                                <div class="image">
                                  <img src="img/valia/fundador.jpeg"/>
                                </div>
                                <div class="details">
                                  <div class="center">
                                    <h1>Justino Cossengue Valentim<br><span>Fundador</span></h1>
                                    <p>Estamos convencidos de que, por meio da educação, pequisa , desenvolvimento e inovação podemos mudar o mundo. Foi essa convicção que nos levou fundar a VALIA.ao em 2021... <a href="#">Ler mais</a></p>
                                    <ul>
                                      <li><a href="#"><i class="bx bxl-facebook" aria-hidden="true"></i></a></li>
                                      <li><a href="#"><i class="bx bxl-twitter" aria-hidden="true"></i></a></li>
                                      <li><a href="#"><i class="bx bxl-google-plus" aria-hidden="true"></i></a></li>
                                      <li><a href="#"><i class="bx bxl-linkedin" aria-hidden="true"></i></a></li>
                                      <li><a href="#"><i class="bx bxl-instagram" aria-hidden="true"></i></a></li>
                                    </ul>
                                  </div>
                                </div>
                              </div>

                        </div>

                    </div>

                    <div class=" row col-lg-7 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="100">
                        <div class="col-lg-8">
                            @isset($updates)


                            <?php foreach ($updates as $key => $updates) { ?>
                            <div class="row">
                                <div class="col-4">
                                   <img src="/storage/{{ $updates->foto }}" alt="" class="card-img-top imgC" srcset="">
                                </div>
                                <div class="col-8">
                                    <?php
                                    setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
                                    date_default_timezone_set('America/Sao_Paulo');
                                    echo strftime(' %d de %B , %Y', strtotime('today')); ?>
                                    <br>
                                  <a href="{{ route('updatesList',$updates->id) }}"> <strong>{{ $updates->titulo }}</strong></a>
                                  <br>
                                  Categoria: {{ $updates->categoria }}
                                </div>
                            </div>
                            <br>
                            <?php }; ?>
                            @endisset
                        </div>
                        @isset($gabaritos)
                        <div class="col-lg-4">
                            <img src="/storage/{{$gabaritos->capa}}" alt="" srcset="" class="card-img-top imgC1">
                            <p class="text-center">{{ $gabaritos->titulo }}</p>
                            <a  href="/storage/{{ $gabaritos->documento }}" target="_blank" class="btn btn-primary center pl-4">baixar</a>


                        </div>
                        @endisset
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->


    @include('layouts.site.footer')
@endsection
