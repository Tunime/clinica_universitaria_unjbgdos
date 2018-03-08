<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ asset('css/clinica.css') }}" rel="stylesheet">
    <title>Clinica Universitaria</title>
  </head>
  <body>
    <!--colocamos el menu de blancoo-->
    <section class="container-fluid container-nav">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Clínica Universitaria</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                @guest
                    <a class="nav-item nav-link" href="/#servicios">Servicios</a>
                    <a class="nav-item nav-link" href="/#especialidad">Especialidades</a>
                    <a class="nav-item nav-link" href="/#contactanos">Contactanos</a>
                    <a class="nav-item nav-link text-warning" href="/login">LOGIN</a>
                @else
                    <a class="nav-item nav-link" href="/#servicios">Servicios</a>
                    <a class="nav-item nav-link" href="/#especialidad">Especialidades</a>
                    <a class="nav-item nav-link" href="/#contactanos">Contáctanos</a>
                    <a class="nav-item nav-link" href="/usuario/historial">Historial clínico</a>
                    <a href="#" class="nav-link disabled" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                            {{ Auth::user()->nombre }} <span class="caret"></span>
                    </a>
                    <a class="nav-link active"  href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Salir
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                @endguest
                </div>
            </div>
            </nav>
    </section>
    <!--fin el menu de blanco-->
    <section class="container-fluid mt-5">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    Historial
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-2">
                            <span><h6>Nombre:</h6><span>{{$paciente->pa_nombre}}</span></span>
                        </div>
                        <div class="col-2">
                            <span><h6>Apellido:</h6><span>{{$paciente->pa_apellido}}</span></span>
                        </div>
                        <div class="col-2">
                            <span><h6>DNI:</h6><span>{{$paciente->dni}}</span></span>
                        </div>
                    </div>
                    <div class="row pt-2">
                        <div class="col-2">
                            <span><h6>Fecha nacimiento:</h6><span>{{$paciente->fech_nacimiento}}</span></span>
                        </div>
                        <div class="col-2">
                            <span><h6>Género:</h6><span>{{$paciente->genero}}</span></span>
                        </div>
                        <div class="col">
                            <span><h6>Direción:</h6><span>{{$paciente->direccion}}</span></span>
                        </div>
                    </div>
                    <hr>
                    @foreach ($historial as $historia)
                    <div class="row pt-3 pb-3">
                        <div class="col">
                            <h2>ATENCIÓN</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <span><h5>Fecha:</h5><span>{{$historia->fech_atencion}}</span></span>
                        </div>
                        <div class="col-2">
                            <span><h5>Hora:</h5><span>{{$historia->hora_atencion}}</span></span>
                        </div>
                        <div class="col-2">
                            <span><h5>Especialida:</h5><span>{{$historia->especialidad}}</span></span>
                        </div>
                        <div class="col-3">
                            <span><h5>Medico:</h5><span>{{$historia->nombre}} {{$historia->apellido}}</span></span>
                        </div>
                    </div>
                    <div class="row pt-3">
                         <div class="col-2">
                            <span><h5>Peso:</h5><span>{{$historia->peso}}</span> kg</span>
                        </div>
                        <div class="col-2">
                            <span><h5>Talla:</h5><span>{{$historia->talla}}</span> mt</span>
                        </div>
                        <div class="col">
                            <h5>Observaciones:</h5>
                            <p>{{$historia->observacion}}</p>
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-4">
                            <h5>Diagnóstico:</h5>
                            <p>{{$historia->diagnostico}}</p>
                        </div>
                        <div class="col">
                            <h5>Tratamiento:</h5>
                            <p>{{$historia->tratamiento}}</p>
                        </div>
                    </div>
                    <hr>
                    
                    @endforeach
                    
                </div>
            </div>
        </div>
        
    </section>
    <!--MODULO DE FOOTER-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
<!--interesnte a que cambiar el diseño de toda esta web cmo se debe y modificar meterlo loes estilo
y tambien poner un area de contactanos-->