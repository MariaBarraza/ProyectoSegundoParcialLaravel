@extends('layouts.admin.inicio')



@section('contenido')

<div class="col-lg-12">
<a class="btn btn-primary btn-sm" style="margin-left: 11px" href="{{route('estufas.index')}}">
    <i class="fas fa-arrow-left"></i>
        Volver a lista de tareas
</a>
<br><br>
                                <div class="card shadow mb-3">
                               
                                    <div class="card-body">
                                    @if(Session::has('exito'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-check"></i> ¡EXITO!</h5>
                    {{Session::get('exito')}}
                </div>
            @endif

            @if(Session::has('error'))
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-check"></i> ¡ERROR!</h5>
                    {{Session::get('error')}}
                </div>
            @endif
                    <form method="POST" enctype="multipart/form-data" action="{{route('estufas.update',$estufa->id)}}">

                            @csrf
                            @method('PUT')
                                            <div class="form-row">
                                            <div class="form-group" >
                                            </div>
                                                <div class="col">
                                                    <div class="form-group"><label for="email"><strong>Tipo tarea</strong></label><input class="form-control" type="text" value="{{$estufa->tipo_tarea}}" name="tipo_tarea"></div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group"><label for="email"><strong>Ubicacion</strong></label><input class="form-control" type="text" value="{{$estufa->ubicacion}}" name="ubicacion"></div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="form-group"><label for="first_name"><strong>Encargado</strong></label><input class="form-control" type="text" value="{{$estufa->encargado}}" name="encargado"></div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group"><label for="last_name"><strong>Descripción</strong></label><textarea class="form-control" type="text" name="descripcion" >{{$estufa->descripcion}}</textarea></div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="form-group"><label for="first_name"><strong>Estado</strong></label><input class="form-control" type="text" value="{{$estufa->estado}}" name="estado" ></div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group"><label for="last_name"><strong>Material</strong></label><input class="form-control" type="text" value="{{$estufa->material}}" name="material" ></div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="form-group"><label for="first_name"><strong>Fecha</strong></label><input class="form-control" type="text" value="{{$estufa->fecha}}" name="fecha" ></div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group"><label for="last_name"><strong>Foto Resultado</strong></label><input type="file" name="imgPortada" class="form-control" /></div>
                                                </div>
                                                @if($estufa->foto_resultado)
                                                <a href="/storage/portadas/{{$estufa->foto_resultado}}" target="_blank">
                                <img style="width: 50px; heigh: auto;" src="/storage/portadas/{{$estufa->foto_resultado}}" />
                            </a>
                                                @else
                                                <p>No hay imagen cargada</p>

                                                @endif
                                            </div>
                                            <div class="form-row">
                                            <div class="form-group">

                                            <button class="btn btn-primary">Actualizar</button>


                                            </div>
                                            </div>
                                            
                                        </form>
                                    </div>
                                </div>
</div>

@endsection

@section('scripts')
@endsection