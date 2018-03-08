<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    
    <title>clinica</title>
  </head>
  <body>
    <div class="container-fluid seccion">
        <!--menu de arriba-->
        <div class="container-fluid menu--ariba fixed-top">
            <ul class=" nav justify-content-end">
                <li class="nav-item">
                    <a href="#" class="nav-link disabled" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                            {{ Auth::user()->nombre }} <span class="caret"></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active"  href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        SALIR
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </div>
        <div class="row seccion">
            <div class="col-2 align-items-stretch menu--lateral">
                    <ul class="nav flex-column menu_lateral">
                        @if( Auth::user()->tipo_usuario == 'admin' )
                            <li class="nav-item d-flex  align-items-center menu_lateral--item">
                                <i class="material-icons">home</i>
                                <a class="nav-link" href="/inicio">INICIO</a>
                            </li>
                            <li class="nav-item d-flex  align-items-center menu_lateral--item">
                                <i class="material-icons">supervisor_account</i>
                                <a class="nav-link" href="/usuario">USUARIOS</a>
                            </li>
                            <li class="nav-item d-flex align-items-center menu_lateral--item">
                                <i class="material-icons">perm_contact_calendar</i>
                                <a class="nav-link" href="/pacientes">PACIENTES</a>
                            </li>
                            <li class="nav-item d-flex  align-items-center menu_lateral--item">
                                <i class="material-icons">face</i>
                                <a class="nav-link" href="/medicos">MÉDICO</a>
                            </li>
                            <!--<li class="nav-item d-flex  align-items-center menu_lateral--item">
                                <i class="material-icons">find_in_page</i>
                                <a class="nav-link" href="#">Reportes</a>-->
                            </li>
                            <li class="nav-item d-flex  align-items-center menu_lateral--item">
                                <i class="material-icons">find_in_page</i>
                                <a class="nav-link" href="/auditoria/paciente">AUDITORIA<br>PACIENTE</a>
                            </li>
                            <li class="nav-item d-flex  align-items-center menu_lateral--item">
                                <i class="material-icons">find_in_page</i>
                                <a class="nav-link" href="/auditoria/medico">AUDITORIA<br>MÉDICOS</a>
                            </li>
                            <li class="nav-item d-flex  align-items-center menu_lateral--item">
                                <i class="material-icons">find_in_page</i>
                                <a class="nav-link" href="/auditoria/usuario">AUDITORIA<br>USUARIOS</a>
                            </li>
                        @else
                            <li class="nav-item d-flex  align-items-center menu_lateral--item">
                                <i class="material-icons">home</i>
                                <a class="nav-link" href="/inicio">INICIO</a>
                            </li>
                            <li class="nav-item d-flex align-items-center menu_lateral--item">
                                <i class="material-icons">perm_contact_calendar</i>
                                <a class="nav-link" href="/pacientes">PACIENTES</a>
                            </li>
                            <li class="nav-item d-flex  align-items-center menu_lateral--item">
                                <i class="material-icons">description</i>
                                <a class="nav-link" href="/atenciones">ATENCIONES</a>
                            </li>
                        @endif
                    </ul>
            </div>
            <!--aqui esta el contenido de cada uno-->
            @yield('body')
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>