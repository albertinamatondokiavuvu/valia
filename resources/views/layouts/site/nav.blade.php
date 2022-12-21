 <!-- ======= Top Bar ======= -->
 <div id="topbar" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">cliente@valia.co.ao</a>
        <i class="bi bi-phone-fill phone-icon"></i> 925630092

      </div>
      <div class="cta d-none d-md-block">
        <a href="{{ route('login') }}" class="scrollto"><i class="bi bi-phone-fill phone-icon"></i>Entrar</a>
      </div>
    </div>
  </div>


  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex align-items-center justify-content-between">

      <!--<h1 class="logo"><a href="index.html">Anyar</a></h1>-->
      <!-- Uncomment below if you prefer to use an image logo -->
       <a href="{{ route('home') }}" class="logo"><img src="/img/logo/Ativo 27.png" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar">
        <ul>
            @if (Request::is('/'))
          <li><a class="nav-link scrollto active" href="#hero">Inicio</a></li>
          <li><a class="nav-link scrollto" href="#service">Serviços</a></li>
          <li><a class="nav-link scrollto " href="#course">Cursos</a></li>
          <li><a class="nav-link scrollto" href="{{ route('mediateca') }}">Bolsa de Formadores</a></li>
          <li><a class="nav-link scrollto" href="{{ route('mediateca') }}">Mediateca Valia.ao</a></li>
          @else
          <li><a class="nav-link scrollto active" href="{{ route('site') }}">Voltar ao início</a></li>
          <li><a class="nav-link scrollto" href="{{ route('mediateca') }}">Bolsa de Formadores</a></li>
            <li><a class="nav-link scrollto" href="{{ route('mediateca') }}">Mediateca Valia.ao</a></li>
          @endif
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>

      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
