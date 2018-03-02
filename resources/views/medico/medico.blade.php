@extends('template/menu')
@section('body')
    <!-- el contenedor de los contenidos -->
    <div class="col-10 contenedor align-items-stretch d-flex justify-content-center align-items-center">
        <seccion class="container contenedor--contenido">
            <seccion class="row contenedor--contenido_titulo">
                <div class="col">
                    <h3>Lista de Medicos</h3>
                </div>
            </seccion>
            <hr>
            <seccion class="row">
                <div class="col-3">
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#nuevomedico">+ nuevo Medico</button>
                </div>
                <div class="col-9 d-flex justify-content-end">
                    <form class="form-inline">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                        </form>
                </div>
            </seccion>
            <seccion class="container">
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Direccion</th>
                        <th scope="col">genero</th>
                        <th scope="col">Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($medicos as $medico)
                            <tr>
                                <th scope="row">{{ $medico->id }}</th>
                                <td>{{ $medico->nombre }}</td>
                                <td>{{ $medico->apellido }}</td>
                                <td>{{ $medico->direccion }}</td>
                                <td>{{ $medico->genero }}</td>
                                <td>
                                        <a href="{{ route('pacientes.edit',$medico->id) }}" type="button" class="btn btn-outline-warning" >Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </seccion>
            
        </seccion>
    </div>
    <!--modales-->
    <div id="nuevomedico" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalPopoversLabel" style="display: none;" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalPopoversLabel">Nuevo Medico</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <!--contedor-modal--conteido-->
              <form action="/medicos" method="POST">
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
                <div class="row">
                    <div class="col form-group">
                        <label for="recipient-name" class="col-form-label">Fecha de nacimiento</label>
                        <input type="text" name="fech_naci" class="form-control" id="recipient-name">
                    </div>
                    <div class="col form-group">
                        <label for="recipient-name" class="col-form-label">Especialidad</label>
                        <input type="text" name="especilidad" class="form-control" id="recipient-name">
                    </div>
                </div>
                <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Direccion</label>
                        <input type="text" name="direccion" class="form-control" id="recipient-name">
                </div>
                <div class="row">
                    <div class="col form-group">
                        <label for="recipient-name" class="col-form-label">Codigo medico</label>
                        <input type="text" name="codmedico" class="form-control" id="recipient-name">
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