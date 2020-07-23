   @extends('layouts.web')

   @section('content')
  
   @include('components.navbar')
      <!--     *********     Header    -->
    <div class="contactus-1 bg-white" style="min-height: 88vh;">
      <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-4 pr-md-0">
              <div class="card card-pricing text-center bg-default" style="border-radius: 0.8rem;">
                <div class="card-header bg-transparent">
                  <h4 class="text-uppercase ls-1 text-primary py-4 mb-0 font-weight-bold text-white"><strong>Falimiar</strong></h4>
                </div>
                <div class="card-body px-lg-5">
                  <div class="display-1 text-white font-weight-light">$270 <small>MIL</small> </div>
                  <span class=" text-muted mt-0">Anuales</span>
                  <ul class="list-unstyled my-4">
                    <li class="text-center"><strong class="text-white">Beneficiarios</strong><small> <br>Titular + Cónyuge + Hijos <br>Hijos menores de 18 años. Hasta 25 años con Certificado de Estudio.</small></li>
                    <li class="text-center"><strong class="text-white">Servicios</strong> <small><br>Salud - Gastronomía - Bienestar - Educación - Hogar - Recreación.</small></li>
                    <li class="text-center"><strong class="text-white">Beneficios</strong> <small><br> Ilimitado a todos los beneficiarios durante el año.</small></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-8 pl-md-0">
              <div class="card card-pricing border-0 text-center my-5 p-4">
                <form method="post" action="{{ url('/store') }}">
                  {!! csrf_field() !!}
                    <h3 class="card-title text-primary text-uppercase font-weight-bold text-center mb-0">Estas a solo 1 paso</h3>
                  <div class="row">
                    <h5 class="text-dark ml-5 mb-0 mt-2"><strong>Completa </strong>Tus datos</h5>
                  </div>
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
                  <div class="card-body mb-0 pb-0">
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                            <select name="profile_id" class="form-control">
                                <option value="" >Tipo de Identificación</option>
                                <option value="3">Cedula de Ciudadania</option>
                                <option value="3">Cedula de Extrangeria</option>
                            </select>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <div class="input-group border mb-4">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fa fa-id-card"></i></span>
                            </div>
                            <input class="form-control" name="document" id="document" placeholder="Identificación" aria-label="Document..." type="text" required>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <div class="input-group border mb-4">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                            </div>
                            <input class="form-control" name="name" id="name" placeholder="Nombre" aria-label="First Name..." type="text" required>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <div class="input-group border">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="ni ni-collection"></i></span>
                            </div>
                            <input type="text"  name="last_name" id="last_name" class="form-control" placeholder="Apellido" aria-label="Last Name..." required>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                            <select name="profile_id" class="form-control">
                                <option value="" >Seleccione un pais</option>
                                <option value="3">Colombia</option>
                            </select>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                            <select name="profile_id" class="form-control">
                                <option value="" >Seleccione un departamento</option>
                                <option value="3">Atlantico</option>
                            </select>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                            <select name="profile_id" class="form-control">
                                <option value="" >Seleccione una ciudad</option>
                                <option value="3">Baranquilla</option>
                            </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <div class="input-group border">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                            </div>
                            <input type="email"  name="email" id="email" class="form-control" placeholder="Email" required>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <div class="input-group border">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-phone"></i></span>
                            </div>
                            <input type="number" class="form-control" name="phone" id="phone" placeholder="Telefono" required="">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 text-center">
                        <div class="form-group">
                            <select name="profile_id" class="form-control">
                                <option value="" >Metodo de pago?</option>
                                <option value="3">PayU</option>
                                <option value="3">Contraentrega</option>
                                <option value="3">Tarjeta de Credito/Debito</option>
                            </select>
                        </div>
                      </div>
                      <div class="col-md-6 text-center">
                        <a href="/gracias" class="btn btn-primary btn-block">Continuar</a><br>
                      </div>
                    </div>
                      <div class="col text-center mt-0">
                        <div class="custom-control custom-checkbox mb-3">
                          <input class="custom-control-input" id="customCheck1" type="checkbox">
                          <label class="custom-control-label" for="customCheck1">
                            <span>Acepto terminos y condiciones</span>
                          </label>
                        </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endsection
