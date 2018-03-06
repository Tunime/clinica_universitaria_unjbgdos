@extends('template/menu')
@section('body')
    <div class="col-10 contenedor align-items-stretch d-flex justify-content-center align-items-center">
        <seccion class="container contenedor--contenido">
        <div class="row pt-4">
            <div class="col">
                <h2 class="display-5">BIENVENIDO {{ Auth::user()->nombre }}</h2>
            </div>
        </div>
            <div class="row pt-4">
                <div class="col">
                    <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title display-3">{{ $doctor->docount}}</h5>
                            <p class="card-text">Cantidad de Doctores en el sistema</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title display-3">{{$paciente->pacount}}</h5>
                            <p class="card-text">Cantidad de Pacientes en el sistema</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title display-3">{{ $atencion->atecount}}</h5>
                            <p class="card-text">Cantidad de Atenciones en el sistema</p>
                        </div>
                    </div>
                </div>
            </div>
        </seccion>
    </div>
@endsection