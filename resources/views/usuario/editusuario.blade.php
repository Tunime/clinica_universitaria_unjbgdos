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
                <form action="{{ route('usuario.update',$usuario->id) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <!--formulaio de auditoria-->
                <div style="display: none;">
                        <div class="row">
                        <div class="col form-group">
                                <label for="recipient-name" class="col-form-label">Nombre</label>
                                <input type="name" name="autnombre"  class="form-control" id="recipient-name" value="{{ $usuario->nombre}}">
                        </div>
                        <div class="col form-group">
                                <label for="recipient-name" class="col-form-label">Apellido</label>
                                <input value="{{ $usuario->apellido}}" type="lastname" name="autapellido" class="form-control" id="recipient-name">
                        </div>
                        </div>
                        <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Nick</label>
                                <input value="{{ $usuario->username}}" type="text" name="autnick" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                                <label for="recipient-name" class="col-form-label">email</label>
                                <input value="{{ $usuario->email}}" type="autemail" name="autemail" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Contraseña</label>
                                <input value="{{ $usuario->username}}" type="password" name="autcontra" class="form-control" id="recipient-name" readonly>
                        </div>
                        <div class="form-group">
                                <label for="exampleFormControlSelect1">tipo usuario</label>
                                <select class="form-control" name="auttipo" id="exampleFormControlSelect1" >
                                        <option>{{ $usuario->tipo_usuario}}</option
                                        <option>admin</option>
                                        <option>invitado</option>
                                        <option>Especialista</option>
                                </select>
                        </div>
                </div>
                <!--fin formulario de auditoria-->
                <div class="row">
                        <div class="col form-group">
                                <label for="recipient-name" class="col-form-label">Nombre</label>
                                <input type="name" name="nombre"  class="form-control" id="recipient-name" value="{{ $usuario->nombre}}">
                        </div>
                        <div class="col form-group">
                                <label for="recipient-name" class="col-form-label">Apellido</label>
                                <input value="{{ $usuario->apellido}}" type="lastname" name="apellido" class="form-control" id="recipient-name">
                        </div>
                </div>
                <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Nick</label>
                        <input value="{{ $usuario->username}}" type="text" name="nick" class="form-control" id="recipient-name">
                </div>
                <div class="form-group">
                        <label for="recipient-name" class="col-form-label">email</label>
                        <input value="{{ $usuario->email}}" type="email" name="email" class="form-control" id="recipient-name">
                </div>
                <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Contraseña</label>
                        <input value="{{ $usuario->username}}" type="text" name="contra" class="form-control" id="recipient-name" readonly>
                </div>
                <div class="form-group">
                        <label for="exampleFormControlSelect1">tipo usuario</label>
                        <select class="form-control" name="tipo" id="exampleFormControlSelect1" >
                                <option>{{ $usuario->tipo_usuario}}</option
                                <option>admin</option>
                                <option>invitado</option>
                                <option>Especialista</option>
                        </select>
                </div>
                 <div class="form-group">
                    <label for="exampleFormControlTextarea1">Razon del cambio</label>
                    <textarea class="form-control" name="autrazon" id="exampleFormControlTextarea1" rows="3" placeholder="Sual es la razon de cambio..." required></textarea>
                </div>
                <!--fin del la auditoria-->
                        <div class="modal-footer">
                        <a href="/usuario" type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</a>
                        <button type="submit" class="btn btn-primary">Gardar</button>
                </div>
                </form>
            </seccion>
            
        </seccion>
    </div>
@endsection