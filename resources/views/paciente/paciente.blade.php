@extends('template/menu')
@section('body')
    <!-- el contenedor de los contenidos -->
    <div class="col-10 contenedor align-items-stretch d-flex justify-content-center align-items-center">
        <seccion class="container contenedor--contenido">
            <seccion class="row contenedor--contenido_titulo">
                <div class="col">
                    <h3>Lista de Pacientes</h3>
                </div>
            </seccion>
            <hr>
            <seccion class="row">
                <div class="col-3">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#nuevopaciente">+ NUEVO PACIENTE</button>
                </div>
                <div class="col-9 d-flex justify-content-end">
                    <form class="form-inline" action="/pacientes" method="get">
                        {{ csrf_field() }}
                        <input name ="name" class="form-control mr-sm-2" type="search" placeholder="Buscar paciente" aria-label="Buscar paciente">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">BUSCAR</button>
                    </form>
                </div>
            </seccion>
            <seccion class="container">
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Dirección</th>
                        <th scope="col">Género</th>
                        <th scope="col">Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pacientes as $paciente)
                            <tr>
                                <th scope="row">{{ $paciente->id }}</th>
                                <td>{{ $paciente->pa_nombre }}</td>
                                <td>{{ $paciente->pa_apellido }}</td>
                                <td>{{ $paciente->direccion }}</td>
                                <td>{{ $paciente->genero }}</td>
                                <td>
                                        <a href="{{ route('pacientes.edit',$paciente->id) }}" type="button" class="btn btn-outline-warning" >EDITAR</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$pacientes->render("pagination::bootstrap-4")}}

            </seccion>
            
        </seccion>
    </div>
    <!--modales-->
    <div id="nuevopaciente" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalPopoversLabel" style="display: none;" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalPopoversLabel">NUEVO PACIENTE</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <!--contedor-modal--conteido-->
              <form action="/pacientes" method="POST">
                {{ csrf_field() }}
                <div class="row">
                    <div class=" col form-group">
                        <label for="recipient-name" class="col-form-label">Nombres:</label>
                        <input type="name" name="nombre"  class="form-control" id="recipient-name">
                    </div>
                    <div class="col form-group">
                        <label for="recipient-name" class="col-form-label">Apellidos:</label>
                        <input type="lastname" name="apellido" class="form-control" id="recipient-name">
                    </div>
                </div>
                <div class="row">
                    <div class=" col form-group">
                        <label for="recipient-name" class="col-form-label">DNI:</label>
                        <input type="text" name="dni" class="form-control" maxlength="8" id="recipient-name">
                    </div>
                    <div class="col form-group">
                            <label for="recipient-name" class="col-form-label">Celular:</label>
                            <input type="text" name="celular" class="form-control" maxlength="9" id="recipient-name">
                    </div>
                </div>
                <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Fecha de nacimiento:</label>
                    <div class="row form-group">
                        <input class="col-3 form-control ml-3" name="dia" type="text" maxlength="2" placeholder="Día">
                        <input class="col-3 form-control ml-3" name="mes" type="text" maxlength="2" placeholder="Mes">
                        <input class="col-4 form-control ml-3" name="ano" type="text" maxlength="4" placeholder="Año">
                    </div>
                </div>
                <div class=" form-group">
                        <label for="recipient-name" class="col-form-label">Ocupación:</label>
                        <input type="text" name="ocupacion" class="form-control" id="recipient-name">
                    </div>
                <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Dirección:</label>
                        <input type="text" name="direccion" class="form-control" id="recipient-name">
                </div>
                <div class="row">
                    <div class="col form-group">
                        <label for="exampleFormControlSelect1">Estado civil:</label>
                        <select class="form-control" name="estado_civil" id="exampleFormControlSelect1">
                        <option>Soltero(a)</option>
                        <option>Casado(a)</option>
                        <option>Viudo(a)</option>
                        <option>Divorciado(a)</option>
                        </select>
                    </div>
                    <div class="col form-group">
                        <label for="exampleFormControlSelect1">Género:</label>
                        <select class="form-control" name="genero" id="exampleFormControlSelect1">
                            <option>Hombre</option>
                            <option>Mujer</option>
                            <option>Complicado</option>
                        </select>
                    </div>
                </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
                    <button type="submit" class="btn btn-primary">GUARDAR</button>
                  </div>
              </form>
            </div>
          </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
@endsection