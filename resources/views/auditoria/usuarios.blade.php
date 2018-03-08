@extends('template/menu')
@section('body')
    <!-- el contenedor de los contenidos -->
    <div class="col-10 contenedor align-items-stretch d-flex justify-content-center align-items-center">
        <seccion class="container contenedor--contenido">
            <seccion class="row contenedor--contenido_titulo">
                <div class="col">
                    <h3>Cambios hechos a Usuarios</h3>
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
                        <th scope="col">Email:</th>
                        <th scope="col">Tipo usuario:</th>
                        <th scope="col">Razón:</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($auditoriausers as $auditoriauser)
                            <tr>
                                <th scope="row">{{ $auditoriauser->id }}</th>
                                <td>{{ $auditoriauser->nombre }}{{ $auditoriauser->apellido }}</td>
                                <td>{{ $auditoriauser->email }}</td>
                                <td>{{ $auditoriauser->tipo_usuario}}</td>
                                <td>{{ $auditoriauser->razon }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$auditoriausers->render("pagination::bootstrap-4")}}
            </seccion>
            
        </seccion>
    </div>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
@endsection