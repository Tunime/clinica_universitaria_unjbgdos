@extends('../template/menu')
@section('body')
     <!-- el contenedor de los contenidos -->
    <div class="col-10 contenedor align-items-stretch d-flex justify-content-center align-items-center">
        <seccion class="container contenedor--contenido">
            <seccion class="row contenedor--contenido_titulo">
                <div class="col">
                    <h3>Lista de usuarios</h3>
                </div>
            </seccion>
            <hr></hr>
            
            <seccion class="seccion-tabla">
                <form action="{{ route('medicos.update',$medico->id) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <!--formulaio de auditoria-->
                <div style="display: none;">
                    <div class="row">
                        <div class=" col form-group">
                            <label for="recipient-name" class="col-form-label">Nombres:</label>
                            <input value="{{$medico->nombre}}" type="name" name="autnombre"  class="form-control" id="recipient-name" readonly>
                        </div>
                        <div class="col form-group">
                            <label for="recipient-name" class="col-form-label">Apellidos:</label>
                            <input value="{{$medico->apellido}}" type="lastname" name="autapellido" class="form-control" id="recipient-name" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class=" col form-group">
                            <label for="recipient-name" class="col-form-label">DNI:</label>
                            <input value="{{$medico->dni_me}}" type="text" name="autdni" class="form-control" maxlength="10" id="recipient-name" readonly>
                        </div>
                        <div class="col form-group">
                            <label for="recipient-name" class="col-form-label">Celular:</label>
                            <input value="{{$medico->celular}}" type="text" name="autcelular" class="form-control" id="recipient-name" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Fecha de nacimiento:</label>
                        <input value="{{$medico->fech_nacimiento}}" class="form-control" name="autfecha" type="text" maxlength="2" placeholder="Día" readonly>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Especialidad:</label>
                        <input  value="{{$medico->especialidad}}" type="text" name="autespecialidad" class="form-control" id="recipient-name" readonly>
                    </div>
                    <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Dirección:</label>
                            <input value="{{$medico->direccion}}" type="text" name="autdireccion" class="form-control" id="recipient-name"readonly>
                    </div>
                    <div class="row">
                        <div class="col form-group">
                            <label for="recipient-name" class="col-form-label">Código médico:</label>
                            <input  value="{{$medico->codigo_medico}}" type="text" name="autcodmedico" class="form-control" id="recipient-name"readonly>
                        </div>
                        <div class="col form-group">
                            <label for="exampleFormControlSelect1">Género:</label>
                            <select class="form-control" name="autgenero" id="exampleFormControlSelect1" readonly>
                                <option>{{$medico->genero}}</option>
                                <option>Hombre</option>
                                <option>Mujer</option>
                                <option>Complicado</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!--fin formulario de auditoria-->
                <div class="row">
                        <div class=" col form-group">
                            <label for="recipient-name" class="col-form-label">Nombres:</label>
                            <input value="{{$medico->nombre}}" type="name" name="nombre"  class="form-control" id="recipient-name">
                        </div>
                        <div class="col form-group">
                            <label for="recipient-name" class="col-form-label">Apellidos:</label>
                            <input value="{{$medico->apellido}}" type="lastname" name="apellido" class="form-control" id="recipient-name">
                        </div>
                    </div>
                    <div class="row">
                        <div class=" col form-group">
                            <label for="recipient-name" class="col-form-label">DNI:</label>
                            <input value="{{$medico->dni_me}}" type="text" name="dni" class="form-control" maxlength="10" id="recipient-name">
                        </div>
                        <div class="col form-group">
                            <label for="recipient-name" class="col-form-label">Celular:</label>
                            <input value="{{$medico->celular}}" type="text" name="celular" class="form-control" id="recipient-name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col form-group">
                            <label for="recipient-name" class="col-form-label">Fecha de nacimiento:</label>
                            <input value="{{$medico->fech_nacimiento}}" class="form-control" name="fecha" type="text" maxlength="2" placeholder="Día">
                        </div>
                        <div class="col form-group">
                            <label for="recipient-name" class="col-form-label">Especialidad:</label>
                            <input  value="{{$medico->especialidad}}" type="text" name="especialidad" class="form-control" id="recipient-name">
                        </div>
                    </div>
                    <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Dirección:</label>
                            <input value="{{$medico->direccion}}" type="text" name="direccion" class="form-control" id="recipient-name">
                    </div>
                    <div class="row">
                        <div class="col form-group">
                            <label for="recipient-name" class="col-form-label">Código médico:</label>
                            <input  value="{{$medico->codigo_medico}}" type="text" name="codmedico" class="form-control" id="recipient-name">
                        </div>
                        <div class="col form-group">
                            <label for="exampleFormControlSelect1">Género:</label>
                            <select class="form-control" name="genero" id="exampleFormControlSelect1">
                                <option>{{$medico->genero}}</option>
                                <option>Hombre</option>
                                <option>Mujer</option>
                                <option>Complicado</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Razon del cambio</label>
                        <textarea class="form-control" name="autrazon" id="exampleFormControlTextarea1" rows="3" placeholder="Cual es la razon de la modificacion..." required></textarea>
                    </div>
                  <div class="modal-footer">
                    <a href="/medicos" type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</a>
                    <button type="submit" class="btn btn-primary">GUARDAR</button>
                  </div>
                </form>
            </seccion>
        </seccion>
    </div>
@endsection