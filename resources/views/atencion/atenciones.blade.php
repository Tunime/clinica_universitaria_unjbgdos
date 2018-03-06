@extends('template/menu')
@section('body')
    <!-- el contenedor de los contenidos -->
    <div class="col-10 contenedor align-items-stretch d-flex justify-content-center align-items-center">
        <seccion class="container contenedor--contenido">
            <seccion class="row contenedor--contenido_titulo">
                <div class="col">
                    <h3>Lista de Atenciones</h3>
                </div>
            </seccion>
            <hr>
            <seccion class="row">
                <div class="col-3">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#nuevopaciente">+ nueva Atencion</button>
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
                        <th scope="col">Paciente</th>
                        <th scope="col">Observacion</th>
                        <th scope="col">Tratamiento</th>
                        <th scope="col">Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($atenciones as $atencion)
                            <tr>
                                <th scope="row">{{ $atencion->id }}</th>
                                <td>{{ $atencion->dni_paciente }}</td>
                                <td>{{ $atencion->observacion }}</td>
                                <td>{{ $atencion->tratamiento }}</td>
                                <td>
                                    <a href="{{ route('pacientes.edit',$atencion->id) }}" type="button" class="btn btn-outline-warning" >Edit</a>
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
              <h5 class="modal-title" id="exampleModalPopoversLabel">Nueva atencion</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <!--contedor-modal--conteido-->
              <form action="/atenciones" method="POST">
                {{ csrf_field() }}
                <h6>Informacion Doctor</h6>
                <div class="row">
                    <div class=" col form-group">
                        <label for="recipient-name" class="col-form-label">Doctor</label>
                        <input readonly="readonly" type="name" value="{{ Auth::user()->nombre }}"  class="form-control" id="recipient-name"></input>
                    </div>
                    <div class="col form-group">
                        <label for="recipient-name" class="col-form-label">DNI Doctor</label>
                        <input value="{{ Auth::user()->username }}" readonly="readonly" type="numer" name="dnidoctor" class="form-control" id="recipient-name"required>
                    </div>
                </div>
                <h6>Informacion paciente</h6>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">DNI</label>
                    <input id="autodni" type="text" name="dnipaciente" class="form-control" id="recipient-name" required>
                </div>
                <div class="row">
                    <div class="col form-group">
                        <label for="recipient-name" class="col-form-label">Peso</label>
                        <input type="text" name="peso" class="form-control" id="recipient-name" required>
                    </div>
                    <div class="col form-group">
                        <label for="recipient-name" class="col-form-label">Talla</label>
                        <input type="text" name="talla" class="form-control" id="recipient-name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Observacion</label>
                    <textarea class="form-control" name="observacion" id="exampleFormControlTextarea1" rows="3" required></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Diagnostico</label>
                    <textarea class="form-control" name="diagnostico" id="exampleFormControlTextarea1" rows="3" required></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Tratamiento</label>
                    <textarea class="form-control" name="tratamiento" id="exampleFormControlTextarea1" rows="3" required></textarea>
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