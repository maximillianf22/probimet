   @extends('layouts.web')

   @section('content')
  
   @include('components.navbar')
      <!--     *********     Header    -->
      <div class="contactus-1 bg-primary" style="background-image: url('{{asset('assets/img/ill/footer.jpg')}}'); background-size: cover;  background-repeat:   no-repeat;  background-position: center center;">
        <div class="container"><br>
          <div class="row">
            <div class="col-lg-7 col-md-8 mx-auto" id="formulario" name="formulario" style="top: -15px; background-color: rgba(255, 255, 255, 0.7);">
              <div class="card-contact card-raised pt-4">
                <form method="post" action="{{ url('/store') }}">
                  {!! csrf_field() !!}
                    <h3 class="card-title text-primary text-uppercase font-weight-bold text-center mb-0">Te falta poco para obtener esta</h3>
                    <h2 class="text-center display-2 font-weight-900 bg-success text-white text-uppercase mx-5" style="border-radius: 10px;">¡Gran Oferta!</h2>
                    <h5 class="text-center font-italic text-dark">
                      Protege a tu familia con la más amplia <strong class="text-primary">membresía</strong><br>
                      <strong class="text-primary">de Beneficios</strong> en salud y bienestar por el equivalente <br>
                      a menos de 1.000 pesos diarios
                     </h5>
                    <div class="description">
                      @if (count($errors) > 0)
                        <div class="alert alert-danger" role="alert">
                          @foreach ($errors->all() as $error)
                          <ul>
                            <li><small>{{ $error }}</small></li>
                          </ul>
                          @endforeach
                        </div>
                      @endif
                  </div>
                  <div class="row">
                    <h5 class="text-dark ml-5 mb-0"><strong class="text-success">Paso 1: </strong>Registrate</h5>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <div class="input-group border border-primary mb-4">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                            </div>
                            <input class="form-control" name="name" id="name" placeholder="Nombre" aria-label="First Name..." type="text" required>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 pl-2">
                        <div class="form-group">
                          <div class="input-group border border-primary">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="ni ni-collection"></i></span>
                            </div>
                            <input type="text"  name="last_name" id="last_name" class="form-control" placeholder="Apellido" aria-label="Last Name..." required>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <div class="input-group border border-primary">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                            </div>
                            <input type="email"  name="email" id="email" class="form-control" placeholder="Email" required>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 pl-2">
                        <div class="form-group">
                          <div class="input-group border border-primary">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-phone"></i></span>
                            </div>
                            <input type="number" class="form-control" name="phone" id="phone" placeholder="Telefono" required="">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col text-center">
                        <a class="btn btn-primary btn-sm" href="/checkout">Registrarme</a>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <h5 class="text-dark ml-5 mb-0"><strong class="text-success">Paso 2: </strong> Elige 6 personas que quieras beneficiar <br>
                     con tu plan</h5>
                  </div>
                  <div class="row mt-3">
                    <h5 class="text-dark ml-5 mb-0"><strong class="text-success">Paso 3: </strong> ¡Empieza a disfrutar!</h5>
                  </div>
                  <div class="container mt-3">
                    <h4 class="card-title text-primary font-weight-bold text-center mb-0 font-italic">
                      Un año de membresía para 7 personas
                    </h4>
                     <div class="row mt-4">
                       <div class="col-6 mx-auto text-center my-auto">
                         <button class="btn btn-success">
                          <del style="color: red;"><strong class="text-white">Antes: $350.000</strong></del>
                         </button>
                        </div>
                       <div class="col-6 mx-auto text-center">
                         <button class="btn btn-success btn-lg py-1 px-2" style="-webkit-box-shadow: 5px 5px 0px 1px rgba(85,143,44,1);-moz-box-shadow: 5px 5px 0px 1px rgba(85,143,44,1);box-shadow: 5px 5px 0px 1px rgba(85,143,44,1);">
                           <h3 class="text-white font-weight-bold mb-0"><strong class="text-yellow text-capitalize">Hoy: </strong>$249.000</h3>
                         </button>
                       </div>
                     </div>
                     <div class="col text-center mt-3 mb-4">
                       <a class="btn btn-primary btn-lg shadow py-1 px-2" href="/checkout">
                         <h3 class="text-white font-weight-bold mb-0">¡Adquiérela <strong class="text-yellow">YA!</strong></h3>
                       </a>
                     </div>
                  </div>
                 </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--     *********     Logo Clientes    -->
      <section style="background-image: url('{{asset('images/div.jpg')}}'); background-size: cover;margin-top: -15px; min-height: 26vh ;background-repeat:   no-repeat;  background-position: center center;">
      <div class="container-fluid">
        <div class="row our-clients">
          <div class="mx-auto">
            <div class="container-fluid">
              <h1 class="text-center text-uppercase pt-5 display-1 text-primary font-weight-900 d-none d-sm-none d-md-block d-lg-block"><strong>Bienvenido al mundo <strong class="text-white" style="text-shadow: -6px 1px 0px #3F8C26;">probienestar</strong></strong></h1>
              <h2 class="text-center text-uppercase pt-5 text-primary font-weight-bold d-block d-sm-block d-md-none d-lg-none"><strong>Bienvenido al mundo <strong class="text-white" style="text-shadow: -6px 1px 0px #3F8C26;">probienestar</strong></strong></h2>
            </div>
          </div>
        </div>
        </div>
      </section>
      <!--     *********  content  -->
      <div class="container-fluid mt-4">
        <div class="row p-4">
          <div class="col-md-6">
            <div class="row">
              <div class="col-2">
                <img src="{{asset('assets/img/icons/clock.png')}}" class="img-fluid" width="70%" style="min-height: 50px;min-width: 50px;">
              </div>
              <div class="col my-auto">
                <h4 class="text-primary">Sin límites de <strong>edad</strong> ni <strong>preexistencia.</strong></h4>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col-2">
                <img src="{{asset('assets/img/icons/doctor.png')}}" class="img-fluid" width="70%" style="min-height: 50px;min-width: 50px;">
              </div>
              <div class="col my-auto">
                <h4 class="text-primary">Médicos <strong>Especialistas</strong> desde <strong>$30.000.</strong></h4>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col-2">
                <img src="{{asset('assets/img/icons/webcam.png')}}" class="img-fluid" width="70%" style="min-height: 50px;min-width: 50px;">
              </div>
              <div class="col my-auto">
                <h4 class="text-primary">Consulta por <strong>videollamada</strong> en linea.</h4>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col-2">
                <img src="{{asset('assets/img/icons/hospital.png')}}" class="img-fluid" width="70%" style="min-height: 50px;min-width: 50px;">
              </div>
              <div class="col my-auto">
                <h4 class="text-primary">Consulta de <strong>médico en casa.</strong></h4>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col-2">
                <img src="{{asset('assets/img/icons/hand.png')}}" class="img-fluid" width="70%" style="min-height: 50px;min-width: 50px;">
              </div>
              <div class="col my-auto">
                <h4 class="text-primary"><strong>Cobertura</strong> presencial en Baranquilla, Cartagena, Santa Marta, Valledupar.</h4>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col-2">
                <img src="{{asset('assets/img/icons/soporte.png')}}" class="img-fluid" width="70%" style="min-height: 50px;min-width: 50px;">
              </div>
              <div class="col my-auto">
                <h4 class="text-primary">Atención <strong>Personalizada.</strong></h4>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col-2">
                <img src="{{asset('assets/img/icons/cart.png')}}" class="img-fluid" width="70%" style="min-height: 50px;min-width: 50px;">
              </div>
              <div class="col my-auto">
                <h4 class="text-primary">Convenios de <strong>descuento</strong> en más de <strong>200 establecimientos comerciales.</strong></h4>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <iframe width="100%" height="350" src="https://www.youtube.com/embed/ufYT_fVgX_c" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="border-radius: 1rem;-webkit-box-shadow: 14px 14px 0px 0px rgba(98,167,51,1);-moz-box-shadow: 14px 14px 0px 0px rgba(98,167,51,1);box-shadow: 14px 14px 0px 0px rgba(98,167,51,1);"></iframe>
            <div class="row mt-5">
              <div class="col-2">
                <img src="{{asset('assets/img/icons/world.png')}}" class="img-fluid" width="70%" style="min-height: 50px;min-width: 50px;">
              </div>
              <div class="col my-auto">
                <h4 class="text-primary">Cobertura de servicios en línea desde <strong>cualquier parte del mundo.</strong></h4>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col-2">
                <img src="{{asset('assets/img/icons/veterinary.png')}}" class="img-fluid" width="70%" style="min-height: 50px;min-width: 50px;">
              </div>
              <div class="col my-auto">
                <h4 class="text-primary">Cobertura para tus <strong>mascotas</strong></h4>
              </div>
            </div>
          </div>
        </div>
      </div>

      @include('components.footer')
      
      @endsection
