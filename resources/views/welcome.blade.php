@extends('layouts.site.header')
@section('title', ' - pagina inicial')
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
                            <p class="description">Ser reconhecido como pioneira e líder no segmento de avaliações e fornecimento
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
                                integridade, equidade, oportunidade e qualidade. A VALIA.AO pratica esses valores ouvindo e aprendendo com todos.</p>
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

          <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
              <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">Todos</li>
                <li data-filter=".filter-formacao">Valia.Formações</li>
                <li data-filter=".filter-impulso">Valia.Impulso</li>
                <li data-filter=".filter-estagio">Valia.Estágios</li>
                <li data-filter=".filter-lic">Valia.Lic</li>
                <li data-filter=".filter-max">Valia.Max</li>
                <li data-filter=".filter-recrutamento">Valia.Recrutamento</li>
                <li data-filter=".filter-solucoes">Valia.Soluções</li>
              </ul>
            </div>
          </div>

          <div class="row portfolio-container">

            <div class="col-lg-4 col-md-6 portfolio-item filter-formacao">
                <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-box">
                      <i class="bi bi-card-checklist"></i>
                      <h4><a href="#">Lorem Ipsum</a></h4>
                      <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                    </div>
                  </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-impulso">
              <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>impulso</h4>
                <p>Web</p>
                <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-estagio">
              <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>estagio</h4>
                <p>App</p>
                <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-lic">
              <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>lic</h4>
                <p>Card</p>
                <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-max">
              <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>max</h4>
                <p>Web</p>
                <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-recrutamento">
              <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>recrutamento</h4>
                <p>App</p>
                <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-solucoes">
              <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>solucoes</h4>
                <p>Card</p>
                <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
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
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4 class="title"><a style="color: white;" href="">Filosofia</a></h4>
                            <p class="description" style="text-align: justify;">Nossa filosofia baseia-se no compromisso com a avaliação, o que inspira
                                a nossa natureza e missão de promover a qualidade e a equidade na educação.</p>

                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up"
                        data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4 class="title"><a style="color: white;" href="">Estratégia</a></h4>
                            <p class="description" style="text-align: justify;">Alargar as oportunidades de crescimentos para alunos
                                e para as empresas por meio de métodos de avaliação mais informados e objetivos.</p>

                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4 class="title"><a style="color: white;" href="">Foco</a></h4>
                            <p class="description" style="text-align: justify;">Nosso foco está nos relacionamentos que construímos com organizações com ideias semelhantes e pioneiros
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

                                <div class="accordion-list">
                                    <ul>
                                        <li data-aos="fade-up" data-aos-delay="100">
                                            <a data-bs-toggle="collapse" class="collapse"
                                                data-bs-target="#accordion-list-1"><span>01</span> Construção de Instrumentos de Avaliação (CIA) <i class="bx bx-chevron-down icon-show"></i><i
                                                    class="bx bx-chevron-up icon-close"></i></a>
                                            <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                                                <p>
                                                    O curso visa dotar os formandos de conhecimentos sobre aplicação de regras de construção de materiais de suporte à construção de testes,
                                                     dos instrumentos de avaliação de tipologia variada, adequada ao objeto e objetivo de avaliação.
                                                </p>
                                            </div>
                                        </li>

                                        <li data-aos="fade-up" data-aos-delay="200">
                                            <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2"
                                                class="collapsed"><span>02</span> Segurança , Higiene e Saúde Escolar (SHSE) <i
                                                    class="bx bx-chevron-down icon-show"></i><i
                                                    class="bx bx-chevron-up icon-close"></i></a>
                                            <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                                                <p>
                                                    O SHSE ou Simplesmente Segurança, Higiene Saúde na Escola é um curso que visa dotar
                                                     os Gestores, vigilantes, Auxiliares ou todos os interessados de conhecimentos de sobre
                                                     os princípios de desenvolvimento organizacional, visando o aumento da qualidade de vida na Escola através
                                                    da integração de métodos de limpeza e desinfecção de artigos escolares, móveis.
                                                </p>
                                            </div>
                                        </li>

                                        <li data-aos="fade-up" data-aos-delay="300">
                                            <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3"
                                                class="collapsed"><span>03</span> Secretariado Escolar (SE) <i
                                                    class="bx bx-chevron-down icon-show"></i><i
                                                    class="bx bx-chevron-up icon-close"></i></a>
                                            <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                                                <p>
                                                    A Secretaria Escolar é o setor responsável pela execução de todos os procedimentos relacionados à legislação e documentação escolar.
                                                    É uma área de suma importância para que a escola possa funcionar corretamente.
                                                </p>
                                            </div>
                                        </li>
                                        <li data-aos="fade-up" data-aos-delay="400">
                                            <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3"
                                                class="collapsed"><span>04</span> Gestão Pedagógica de Centros de Formação (GPCF) <i
                                                    class="bx bx-chevron-down icon-show"></i><i
                                                    class="bx bx-chevron-up icon-close"></i></a>
                                            <div id="accordion-list-4" class="collapse" data-bs-parent=".accordion-list">
                                                <p>
                                                    O Curso de Gestão Pedagógica de centros de formação mostra quais são as formas corretas de planejar e
                                                     administrar a estrutura de um centro. Você aprenderá sobre quais os departamentos de centro, como funcionam, quais suas atribuições
                                                    e deveres, dos Directores, Cordenadores Pedagógicos e Formadores.
                                                </p>
                                            </div>
                                        </li>

                                    </ul>
                                </div>

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
@endsection
