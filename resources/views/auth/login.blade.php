<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<style>
    .gradient-custom-2 {
        /*background: linear-gradient(#08e8e1, rgba(6, 241, 178, 0.95), rgba(214, 241, 6, 0.95))*/
         background: linear-gradient(#017a76d8, rgba(5, 140, 104, 0.95), rgba(150, 169, 2, 0.95))
/* fallback for old browsers */

}

@media (min-width: 768px) {
.gradient-form {
height: 100vh !important;
}
}
@media (min-width: 769px) {
.gradient-custom-2 {
border-top-right-radius: .3rem;
border-bottom-right-radius: .3rem;
}
}
</style>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-10">
              <div class="card rounded-3 text-black">
                <div class="row g-0">
                  <div class="col-lg-6">
                    <div class="card-body p-md-5 mx-md-4">

                      <div class="text-center">
                        <a href="{{ route('site') }}">
                        <img src="/img/logo/logoValia.png"
                          style="width: 185px;" alt="logo"></a>
                        <h4 class="mt-1 mb-5 pb-1"></h4>
                      </div>

                      <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <p>Por favor, inicie sessão na sua conta</p>

                        <div class="form-outline mb-4">
                          <input id="email" type="email" id="form2Example11" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                            placeholder="endereço de email" />
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>

                        <div class="form-outline mb-4">
                          <input id="password" type="password" id="form2Example22" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="palavra-passe" />

                          @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                        </div>

                        <div class="text-center pt-1 mb-5 pb-1">
                          <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Log
                            in</button>
                        </div>


                      </form>

                    </div>
                  </div>
                  <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                    <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                      <h4 class="mb-4">Somos mais do que uma empresa</h4>
                      <p class=" mb-0">Primamos pela Inovação,
                        Responsabilidade social, integridade, equidade, oportunidade e qualidade.
                        A VALIA.AO pratica esses valores ouvindo e aprendendo com todos.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</body>
</html>
