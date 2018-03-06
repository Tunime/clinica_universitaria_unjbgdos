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
            <hr>
            <seccion class="row">
                <div class="col-3">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#nuevousuario">+ nuevo usuario</button>
                </div>
                <div class="col-9 d-flex justify-content-end">
                    <form class="form-inline">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                </div>
            </seccion>
            <seccion class="container">
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Nick</th>
                        <th scope="col">tipo</th>
                        <th scope="col">Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($usuarios as $usuario)
                            <tr>
                                    <th scope="row">{{ $usuario->id }}</th>
                                    <td>{{ $usuario->nombre }}</td>
                                    <td>{{ $usuario->email }}</td>
                                    <td>{{ $usuario->tipo_usuario }}</td>
                                    <td>
                                    <form action="{{ route('usuario.destroy',$usuario->id) }}" method="POST">
                                        <a href="{{ route('usuario.edit',$usuario->id) }}" type="button" class="btn btn-outline-warning" >Edit</a>
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
    <div id="nuevousuario" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalPopoversLabel" style="display: none;" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalPopoversLabel">Nuevo usuario</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <!--contedor-modal--conteido-->
              <form action="{{ route('usuario.store') }}" method="POST">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col form-group">
                        <label for="recipient-name" class="col-form-label">Nombre</label>
                        <input type="name" name="nombre"  class="form-control" id="recipient-name">
                    </div>
                    <div class="col form-group">
                        <label for="recipient-name" class="col-form-label">Apellido</label>
                        <input type="lastname" name="apellido" class="form-control" id="recipient-name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Nick</label>
                    <input type="text" name="nick" class="form-control" id="recipient-name">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">email</label>
                    <input type="email" name="email" class="form-control" id="recipient-name">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Contraseña</label>
                    <input type="password" name="contra" class="form-control" id="recipient-name">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">tipo usuario</label>
                    <select class="form-control" name="tipo" id="exampleFormControlSelect1">
                      <option>admin</option>
                      <option>invitado</option>
                      <option>Especialista</option>
                    </select>
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
@endsection