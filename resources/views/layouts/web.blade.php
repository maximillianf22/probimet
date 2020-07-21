<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}">
  <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
  <title>
    Probimet - Ofertas
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <link href="{{ asset('assets/css/font-awesome.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="{{ asset('assets/css/argon-design-system.min.css?v=1.0.2') }}" rel="stylesheet" />

  <style type="text/css">
    .btn_whatsapp, btn_whatsapp:active {position: fixed;z-index: 999;bottom: 10px;right: 10px;background-color: #25d366;color: #fff;padding: 10px 25px;font-size: 13px;border-radius: 50px;font-weight: bold;}
    .btn_whatsapp a:hover, btn_whatsapp:active {color:#FFF !important }
  </style>
</head>

<body class="index-page">


  @yield('content')

  @include('components.footer')


   <a href="https://api.whatsapp.com/send?phone=573016245760&amp;text=Hola,%20estoy%20interesado%20en%20el%20producto" class="btn_whatsapp" target="_blank">
        <i class="fab fa-whatsapp fa-3x mt-1 mb-1" aria-hidden="true"></i>
   </a>
  <!--   Core JS Files   -->
  <script src="{{ asset('assets/js/core/jquery.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/js/core/popper.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="{{ asset('assets/js/plugins/bootstrap-switch.js') }}"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="{{ asset('assets/js/plugins/nouislider.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/js/plugins/moment.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/bootstrap-datepicker.min.js') }}"></script>
  <!-- Control Center for Argon UI Kit: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->
  <script src="{{ asset('assets/js/argon-design-system.min.js?v=1.2.0') }}" type="text/javascript"></script>
</body>

</html>