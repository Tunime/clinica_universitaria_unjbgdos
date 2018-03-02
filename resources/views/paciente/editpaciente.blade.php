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
                <form action="{{ route('pacientes.update',$paciente->id) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <!--formulaio de auditoria-->
                <div style="display:none;">
                        <div class="row">
                    <div class=" col form-group">
                        <label for="recipient-name" class="col-form-label">Nombres:</label>
                        <input value="{{ $paciente->nombre}}" type="name" name="autnombre"  class="form-control" id="recipient-name" readonly>
                    </div>
                    <div class="col form-group">
                        <label for="recipient-name" class="col-form-label">Apellidos:</label>
                        <input value="{{ $paciente->apellido}}" type="lastname" name="autapellido" class="form-control" id="recipient-name" readonly>
                    </div>
                </div>
                <div class="row">
                    <div class=" col form-group">
                        <label for="recipient-name" class="col-form-label">DNI:</label>
                        <input value="{{ $paciente->dni}}" type="text" name="autdni" class="form-control" maxlength="8" id="recipient-name" readonly>
                    </div>
                    <div class="col form-group">
                            <label for="recipient-name" class="col-form-label">Celular:</label>
                            <input value="{{ $paciente->celular}}" type="text" name="autcelular" class="form-control" maxlength="9" id="recipient-name" readonly>
                    </div> 
                </div>
                <div class="row">
                    <div class="col form-group">
                            <label for="recipient-name" class="col-form-label">Fecha de nacimiento:</label>
                            <input class="form-control" name="autfecha" type="text" maxlength="2" value="{{ $paciente->fech_nacimiento}}" readonly> 
                    </div>
                    <div class="col form-group">
                            <label for="recipient-name" class="col-form-label">Ocupación:</label>
                            <input value="{{ $paciente->ocupacion}}" type="text" name="autocupacion" class="form-control" id="recipient-name" readonly>
                    </div>
                </div>
                <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Dirección:</label>
                        <input value="{{ $paciente->direccion}}" type="text" name="autdireccion" class="form-control" id="recipient-name " readonly>
                </div>
                <div class="row">
                    <div class="col form-group">
                        <label for="exampleFormControlSelect1" readonly>{{ $paciente->estado_civil}}</label>
                        <select class="form-control" name="autestado_civil" id="exampleFormControlSelect1" readonly>
                        <option readonly>Soltero(a)</option>
                        <option readonly>Casado(a)</option>
                        <option readonly>Viudo(a)</option>
                        <option readonly>Divorciado(a)</option>
                        </select>
                    </div>
                    <div class="col form-group">
                        <label for="exampleFormControlSelect1" readonly>{{ $paciente->genero}}</label>
                        <select class="form-control" name="autgenero" id="exampleFormControlSelect1" readonly>
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
                        <input value="{{ $paciente->nombre}}" type="name" name="nombre"  class="form-control" id="recipient-name" required>
                    </div>
                    <div class="col form-group">
                        <label for="recipient-name" class="col-form-label">Apellidos:</label>
                        <input value="{{ $paciente->apellido}}" type="lastname" name="apellido" class="form-control" id="recipient-name" required>
                    </div>
                </div>
                <div class="row">
                    <div class=" col form-group">
                        <label for="recipient-name" class="col-form-label">DNI:</label>
                        <input value="{{ $paciente->dni}}" type="text" name="dni" class="form-control" maxlength="8" id="recipient-name" required>
                    </div>
                    <div class="col form-group">
                            <label for="recipient-name" class="col-form-label">Celular:</label>
                            <input value="{{ $paciente->celular}}" type="text" name="celular" class="form-control" maxlength="9" id="recipient-name" required>
                    </div> 
                </div>
                <div class="row">
                    <div class="col form-group">
                            <label for="recipient-name" class="col-form-label">Fecha de nacimiento:</label>
                            <input class="form-control" name="fecha" type="text" maxlength="2" value="{{ $paciente->fech_nacimiento}}" required>
                    </div>
                    <div class="col form-group">
                            <label for="recipient-name" class="col-form-label">Ocupación:</label>
                            <input value="{{ $paciente->ocupacion}}" type="text" name="ocupacion" class="form-control" id="recipient-name" required>
                    </div>
                </div>
                <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Dirección:</label>
                        <input value="{{ $paciente->direccion}}" type="text" name="direccion" class="form-control" id="recipient-name" required>
                </div>
                <div class="row">
                    <div class="col form-group">
                        <label for="exampleFormControlSelect1">Estado Civil</label>
                        <select class="form-control" name="estado_civil" id="exampleFormControlSelect1" value="{{ $paciente->estado_civil}}">
                        <option>Soltero(a)</option>
                        <option>Casado(a)</option>
                        <option>Viudo(a)</option>
                        <option>Divorciado(a)</option>
                        </select>
                    </div>
                    <div class="col form-group">
                        <label for="exampleFormControlSelect1">Genero</label>
                        <select class="form-control" name="genero" id="exampleFormControlSelect1" value="{{ $paciente->genero}}">
                            <option>Hombre</option>
                            <option>Mujer</option>
                            <option>Complicado</option>
                        </select>
                    </div>
                </div>
                 <div class="form-group">
                    <label for="exampleFormControlTextarea1">Razon del cambio</label>
                    <textarea class="form-control" name="autrazon" id="exampleFormControlTextarea1" rows="3" placeholder="Sual es la razon de cambio..." required></textarea>
                </div>
                  <div class="modal-footer">
                    <a href="/pacientes" type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</a>
                    <button type="submit" class="btn btn-primary">GUARDAR</button>
                  </div>
                </form>
            </seccion>
            
        </seccion>
    </div>
@endsection