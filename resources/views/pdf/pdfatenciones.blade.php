<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Reseta</title>
  </head>
  <body>
     <!--fin el menu de blanco-->
    <section class="container-fluid mt-5">
                <table class="table">
                    <tr>
                        <td>
                            <span><h6>Nombre</h6><span>{{$atencion->pa_nombre}}</span></span>
                        </td>
                        <td>
                            <span><h6>Apellido</h6><span>{{$atencion->pa_apellido}}</span></span>
                        </td>
                        <td>
                            <span><h6>Fecha nacimiento</h6><span>{{$atencion->fech_nacimiento}}</span></span>
                        </td>
                        <td>
                            <span><h6>genero</h6><span>{{$atencion->genero}}</span></span>
                        </td>
                    </tr>
                    <hr>
                    <tr>
                        <td>
                            <h2>ATENCION</h2>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span><h5>Fecha</h5><span>{{$atencion->fech_atencion}}</span></span>
                        </td>
                        <td>
                            <span><h5>Hora</h5><span>{{$atencion->hora_atencion}}</span></span>
                        </td>
                        <td>
                            <span><h5>Especialida</h5><span>{{$atencion->especialidad}}</span></span>
                        </td>
                        <td>
                            <span><h5>Medico</h5><span>{{$atencion->nombre}} {{$atencion->apellido}}</span></span>
                        </td>
                    </tr>
                    <tr>
                         <td>
                            <span><h5>Peso</h5><span>{{$atencion->peso}}</span> kg</span>
                        </td>
                        <td>
                            <span><h5>Talla</h5><span>{{$atencion->talla}}</span> mt</span>
                        </td>
                        <td colspan="2">
                            <h5>Observaciones</h5>
                            <p>{{$atencion->observacion}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <h5>Diagnostico</h5>
                            <p>{{$atencion->diagnostico}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <h5>Tratamiento</h5>
                            <p>{{$atencion->tratamiento}}</p>
                        </td>
                    </tr>
                </table>
    </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>