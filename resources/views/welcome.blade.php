@extends('layouts.site.header')
@section('title', ' - pagina inicial')
<style>
    .carousel-inner {
  padding: 1em;
}
.card {
  margin: 0 0.5em;
  box-shadow: 2px 6px 8px 0 rgba(22, 22, 26, 0.18);
  border: none;
}
.carousel-control-prev,
.carousel-control-next {
  background-color: #e1e1e1;
  width: 6vh;
  height: 6vh;
  border-radius: 50%;
  top: 50%;
  transform: translateY(-50%);
}
@media (min-width: 768px) {
  .carousel-item {
    margin-right: 0;
    flex: 0 0 33.333333%;
    display: block;
  }
  .carousel-inner {
    display: flex;
  }
}
.card .img-wrapper {
    max-width: 100%;
    height: 13em;
    display: flex;
    justify-content: center;
    align-items: center;
}
.card img {
    max-height: 100%;
}
@media (max-width: 767px) {
  .card .img-wrapper {
    height: 17em;
  }
}
</style>
@section('content')


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
            <div class="container">

                <div class="row">
                    <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4 class="title"><a href="">Missão</a></h4>
                            <p class="description">Promover a qualidade e a equidade na avaliação, fornecimento
                                testes padronizados...</p>

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
                            <a href="">Ler mais...</a>
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


        <!-- ======= Portfoio Section ======= -->
        <section id="portfolio" class="portfoio">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Serviços</h2>
                    <p>Consulte um especialista Confiável Hoje</p>
                </div>

                <div id="carouselExampleControls" class="carousel" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="card">
                                <div class="img-wrapper"><img src="..." class="d-block w-100" alt="..."> </div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title 1</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                        card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card">
                                <div class="img-wrapper"><img src="..." class="d-block w-100" alt="..."> </div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title 2</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                        card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card">
                                <div class="img-wrapper"><img src="..." class="d-block w-100" alt="..."> </div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title 3</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                        card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card">
                                <div class="img-wrapper"><img src="..." class="d-block w-100" alt="..."> </div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title 4</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                        card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card">
                                <div class="img-wrapper"><img src="..." class="d-block w-100" alt="..."> </div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title 5</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                        card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card">
                                <div class="img-wrapper"><img src="..." class="d-block w-100" alt="..."> </div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title 6</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                        card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card">
                                <div class="img-wrapper"><img src="..." class="d-block w-100" alt="..."> </div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title 7</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                        card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card">
                                <div class="img-wrapper"><img src="..." class="d-block w-100" alt="..."> </div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title 8</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                        card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>

                        </div>
                        <div class="carousel-item">
                            <div class="card">
                                <div class="img-wrapper"><img src="..." class="d-block w-100" alt="..."> </div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title 9</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                        card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

            </div>
        </section><!-- End Portfoio Section -->

        <!-- ======= Cta Section ======= -->
        <div class="section-title">
            <h2>Cursos valia.ao</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                consectetur velit. Quisquam quos quisquam cupiditate.</p>
        </div>
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
                                        a nossa natureza e missão de promover a qualidade e a equidade na educação.</p>

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
        <section id="why-us" class="why-us">
            <div class="container-fluid">

                <div class="row">

                    <div class="col-lg-5 align-items-stretch position-relative video-box"
                        style='background-image: url("assets/img/why-us.jpg");' data-aos="fade-right">
                        <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn mb-4"></a>
                    </div>

                    <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch"
                        data-aos="fade-left">

                        <div class="content">
                            <h3>Cursos Administrados pela <strong>Valia.ao</strong></h3>
                        </div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Curso</th>
                                    <th scope="col">Resumo</th>
                                    <th scope="col">Baixar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Construção de Instrumentos de Avaliação (CIA)</td>
                                    <td>O curso visa dotar os formandos de conhecimentos sobre aplicação de regras de
                                        construção de materiais de suporte à construção de testes,
                                        dos instrumentos de avaliação de tipologia variada, adequada ao objeto e objetivo de
                                        avaliação.</td>
                                    <td> <br> <a href="" style="text-align: right;"><img src="/img/PDF_40px.png"
                                                alt="" srcset=""></a></td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td> Segurança , Higiene e Saúde Escolar (SHSE)</td>
                                    <td> O SHSE ou Simplesmente Segurança, Higiene Saúde na Escola é um curso que visa dotar
                                        os Gestores, vigilantes, Auxiliares ou todos os interessados de conhecimentos de
                                        sobre
                                        os princípios de desenvolvimento organizacional, visando o aumento da qualidade de
                                        vida na Escola através
                                        da integração de métodos de limpeza e desinfecção de artigos escolares, móveis.</td>
                                    <td><br> <a href="" style="text-align: right;"><img src="/img/PDF_40px.png"
                                                alt="" srcset=""></a></td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Secretariado Escolar (SE)</td>
                                    <td>A Secretaria Escolar é o setor responsável pela execução de todos os procedimentos
                                        relacionados à legislação e documentação escolar.
                                        É uma área de suma importância para que a escola possa funcionar corretamente.</td>
                                    <td><br> <a href="" style="text-align: right;"><img src="/img/PDF_40px.png"
                                                alt="" srcset=""></a></td>
                                </tr>
                                <tr>
                                    <td scope="row">4</td>
                                    <td>Gestão Pedagógica de Centros de Formação (GPCF)</td>
                                    <td> O Curso de Gestão Pedagógica de centros de formação mostra quais são as formas
                                        corretas de planejar e
                                        administrar a estrutura de um centro. Você aprenderá sobre quais os departamentos de
                                        centro, como funcionam, quais suas atribuições
                                        e deveres, dos Directores, Cordenadores Pedagógicos e Formadores.</td>
                                    <td> <br> <a href="" style="text-align: right;"><img src="/img/PDF_40px.png"
                                                alt="" srcset=""></a></td>
                                </tr>
                            </tbody>
                        </table>


                    </div>

                </div>

            </div>
        </section><!-- End Why Us Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Team</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                        consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                        fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row">

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Walter White</h4>
                                <span>Chief Executive Officer</span>
                                <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                                <div class="social">
                                    <a href=""><i class="ri-twitter-fill"></i></a>
                                    <a href=""><i class="ri-facebook-fill"></i></a>
                                    <a href=""><i class="ri-instagram-fill"></i></a>
                                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Sarah Jhonson</h4>
                                <span>Product Manager</span>
                                <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                                <div class="social">
                                    <a href=""><i class="ri-twitter-fill"></i></a>
                                    <a href=""><i class="ri-facebook-fill"></i></a>
                                    <a href=""><i class="ri-instagram-fill"></i></a>
                                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>William Anderson</h4>
                                <span>CTO</span>
                                <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                                <div class="social">
                                    <a href=""><i class="ri-twitter-fill"></i></a>
                                    <a href=""><i class="ri-facebook-fill"></i></a>
                                    <a href=""><i class="ri-instagram-fill"></i></a>
                                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4" data-aos="fade-up" data-aos-delay="400">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Amanda Jepson</h4>
                                <span>Accountant</span>
                                <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                                <div class="social">
                                    <a href=""><i class="ri-twitter-fill"></i></a>
                                    <a href=""><i class="ri-facebook-fill"></i></a>
                                    <a href=""><i class="ri-instagram-fill"></i></a>
                                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Team Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact Us</h2>
                </div>

                <div class="row mt-1 d-flex justify-content-end" data-aos="fade-right" data-aos-delay="100">

                    <div class="col-lg-5">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>A108 Adam Street, New York, NY 535022</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>info@example.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>+1 5589 55488 55s</p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-6 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="100">

                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>

                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->


    @include('layouts.site.footer')
    <script>
         $(document).ready(function() {

            var multipleCardCarousel = document.querySelector(
  "#carouselExampleControls"
);
if (window.matchMedia("(min-width: 768px)").matches) {
  var carousel = new bootstrap.Carousel(multipleCardCarousel, {
    interval: false,
  });
  var carouselWidth = $(".carousel-inner")[0].scrollWidth;
  var cardWidth = $(".carousel-item").width();
  var scrollPosition = 0;
  $("#carouselExampleControls .carousel-control-next").on("click", function () {
    if (scrollPosition < carouselWidth - cardWidth * 4) {
      scrollPosition += cardWidth;
      $("#carouselExampleControls .carousel-inner").animate(
        { scrollLeft: scrollPosition },
        600
      );
    }
  });
  $("#carouselExampleControls .carousel-control-prev").on("click", function () {
    if (scrollPosition > 0) {
      scrollPosition -= cardWidth;
      $("#carouselExampleControls .carousel-inner").animate(
        { scrollLeft: scrollPosition },
        600
      );
    }
  });
} else {
  $(multipleCardCarousel).addClass("slide");
}
            });

    </script>
@endsection
