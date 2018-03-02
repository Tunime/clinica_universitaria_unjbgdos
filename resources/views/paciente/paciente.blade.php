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
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#nuevopaciente">+ nuevo Paciente</button>
                </div>
                <div class="col-9 d-flex justify-content-end">
                    <form class="form-inline">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                        </form>
                </div>
            </seccion>
            <seccion class="seccion-tabla">
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Direccion</th>
                        <th scope="col">Género</th>
                        <th scope="col">Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pacientes as $paciente)
                            <tr>
                                <th scope="row">{{ $paciente->id }}</th>
                                <td>{{ $paciente->nombre }}</td>
                                <td>{{ $paciente->apellido }}</td>
                                <td>{{ $paciente->direccion }}</td>
                                <td>{{ $paciente->genero }}</td>
                                <td>
                                    <form action="{{ route('pacientes.destroy',$paciente->id) }}" method="POST">
                                        <a href="{{ route('pacientes.edit',$paciente->id) }}" type="button" class="btn btn-outline-warning" >Edit</a>
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-outline-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </seccion>
            
        </seccion>
    </div>
    <!--modales-->
    <div id="nuevopaciente" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalPopoversLabel" style="display: none;" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalPopoversLabel">Nuevo Paciente</h5>
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
                        <label for="recipient-name" class="col-form-label">Nombres</label>
                        <input type="name" name="nombre"  class="form-control" id="recipient-name">
                    </div>
                    <div class="col form-group">
                        <label for="recipient-name" class="col-form-label">Apellidos</label>
                        <input type="lastname" name="apellido" class="form-control" id="recipient-name">
                    </div>
                </div>
                <div class="row">
                    <div class=" col form-group">
                        <label for="recipient-name" class="col-form-label">DNI</label>
                        <input type="text" name="dni" class="form-control" id="recipient-name">
                    </div>
                    <div class="col form-group">
                            <label for="recipient-name" class="col-form-label">Celular</label>
                            <input type="text" name="celular" class="form-control" id="recipient-name">
                    </div>
                </div>
                   <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Fecha de nacimiento:</label>
                        <div class="row col form-group">
                            <input class=" col form-control" type="text" placeholder="Día">
                            <input class="col form-control ml-4" type="text" placeholder="Mes">
                            <input class="col form-control ml-4" type="text" placeholder="Año">
                        </div>
                </div>
                <div class=" form-group">
                        <label for="recipient-name" class="col-form-label">Ocupación</label>
                        <input type="text" name="ocupacion" class="form-control" id="recipient-name">
                    </div>
                <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Dirección</label>
                        <input type="text" name="direccion" class="form-control" id="recipient-name">
                </div>
                <div class="row">
                    <div class="col form-group">
                        <label for="exampleFormControlSelect1">Estado civil</label>
                        <select class="form-control" name="estado_civil" id="exampleFormControlSelect1">
                        <option>Soltero(a)</option>
                        <option>Casado(a)</option>
                        <option>Viudo(a)</option>
                        <option>Divorciado(a)</option>
                        </select>
                    </div>
                    <div class="col form-group">
                        <label for="exampleFormControlSelect1">Genero</label>
                        <select class="form-control" name="genero" id="exampleFormControlSelect1">
                            <option>Hombre</option>
                            <option>Mujer</option>
                            <option>Compliado</option>
                        </select>
                    </div>
                </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Gardar</button>
                  </div>
              </form>
            </div>
          </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
@endsection