@extends('template/menu')
@section('body')
    <!-- el contenedor de los contenidos -->
    <div class="col-10 contenedor align-items-stretch d-flex justify-content-center align-items-center">
        <seccion class="container contenedor--contenido">
            <seccion class="row contenedor--contenido_titulo">
                <div class="col">
                    <h3>Cambios hechos a Pacientes</h3>
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
                        <th scope="col">Nombre y Apellidos:</th>
                        <th scope="col">Ocupación:</th>
                        <th scope="col">DNI:</th>
                        <th scope="col">Razón del cambio:</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($auditoriapacientes as $auditoriapaciente)
                            <tr>
                                <th scope="row">{{ $auditoriapaciente->id }}</th>
                                <td>{{ $auditoriapaciente->nombre }}{{ $auditoriapaciente->apellido }}</td>
                                <td>{{ $auditoriapaciente->ocupacion }}</td>
                                <td>{{ $auditoriapaciente->dni}}</td>
                                <td>{{ $auditoriapaciente->razon }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$auditoriapacientes->render("pagination::bootstrap-4")}}
            </seccion>
            
        </seccion>
    </div>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
@endsection