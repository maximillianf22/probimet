@extends('layouts.web')

@section('content')
<body class="index-page" style="background-color: #e0e1e3">
    <div class="wrapper section-signup m-0 p-0 d-none d-md-block d-lg-block" style="background-image: url('{{asset('images/gracias.jpg')}}'); background-attachment: fixed; background-size:     cover;  background-repeat:   no-repeat;  background-position: center center; height: 100vh;">
  </div>

    <div class="wrapper section-signup m-0 p-0 d-block d-md-none d-lg-none" style="background-image: url('{{asset('images/m-gracias.jpg')}}'); background-attachment: fixed; background-size:     cover;  background-repeat:   no-repeat;  background-position: center center; height: 100vh;">
        <div style="height: 40vh"></div>
        <div class="container" style="height: 20vh">
            <img src="{{asset('images/gracias-text.png')}}">
        </div>
        <div style="height: 40vh"></div>
    </div>
    <div class="container">
      @if(Session::has('Mensaje'))
        <div class="alert alert-success" role="alert">
          {{ Session::get('Mensaje')}}
        </div>
      @endif
  </div>
  <!-- End Header -->
</body>
@endsection