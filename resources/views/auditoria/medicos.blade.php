@extends('template/menu')
@section('body')
    <!-- el contenedor de los contenidos -->
    <div class="col-10 contenedor align-items-stretch d-flex justify-content-center align-items-center">
        <seccion class="container contenedor--contenido">
            <seccion class="row contenedor--contenido_titulo">
                <div class="col">
                    <h3>Cambios hechos a Doctores</h3>
                </div>
            </seccion>
            <hr>
            <seccion class="row">
            </seccion>
            <seccion class="container">
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre apellido</th>
                        <th scope="col">Codigo medico</th>
                        <th scope="col">DNI</th>
                        <th scope="col">Celular</th>
                        <th scope="col">Razon del cambio</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($auditoriamedicos as $auditoriamedico)
                            <tr>
                                <th scope="row">{{ $auditoriamedico->id }}</th>
                                <td>{{ $auditoriamedico->nombre }}{{ $auditoriamedico->apellido }}</td>
                                <td>{{ $auditoriamedico->codigo_medico }}</td>
                                <td>{{ $auditoriamedico->dni_me }}</td>
                                <td>{{ $auditoriamedico->celular }}</td>
                                <td>{{ $auditoriamedico->razon }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$auditoriamedicos->render("pagination::bootstrap-4")}}
            </seccion>
            
        </seccion>
    </div>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
@endsection