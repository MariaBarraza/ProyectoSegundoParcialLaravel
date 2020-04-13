@extends('layouts.admin.inicio')



@section('contenido')

<div class="col-lg-12">
<a class="btn btn-primary btn-sm" style="margin-left: 11px" href="{{route('estufasReparar.index')}}">
    <i class="fas fa-arrow-left"></i>
        Volver a lista de tareas
</a>
<br><br>
                                <div class="card shadow mb-3">
                                    <div class="card-header py-3">
                                        <p class="text-primary m-0 font-weight-bold">Tarea
                                     
                                        </p>
                                    </div>
                                    <div class="card-body">
                                        <form>
                                            <center>
                                        <div class="col-lg-3">
                                        <div class="card-body text-center shadow"><img class="" src="/storage/assets/portadas/{{$estufa->foto_resultado}}" width="160" height="160">
                            
                                        </div>
                                    </div>
                                            </center>
                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="form-group"><label for="username"><strong>Tarea</strong></label><input class="form-control" type="text" placeholder="{{$estufa->id}}" name="id" disabled></div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group"><label for="email"><strong>Tipo tarea</strong></label><input class="form-control" type="email" placeholder="{{$estufa->tipo_tarea}}" name="tipo_tarea"  disabled></div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="form-group"><label for="first_name"><strong>Encargado</strong></label><input class="form-control" type="text" placeholder="{{$estufa->encargado}}" name="encargado" disabled></div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group"><label for="last_name"><strong>Descripción</strong></label><textarea class="form-control" type="text" placeholder="{{$estufa->descripcion}}" name="descripcion" disabled></textarea></div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="form-group"><label for="first_name"><strong>Estado</strong></label><input class="form-control" type="text" placeholder="{{$estufa->estado}}" name="estado" disabled></div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group"><label for="first_name"><strong>Materiales</strong></label><input class="form-control" type="text" placeholder="{{$estufa->material}}" name="estado" disabled></div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="form-group"><label for="first_name"><strong>Fecha</strong></label><input class="form-control" type="text" placeholder="{{$estufa->fecha}}" name="fecha" disabled></div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group"><label for="last_name"><strong>Ubicacion</strong></label><input class="form-control" type="text" placeholder="{{$estufa->ubicacion}}" name="ubicacion" disabled></div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="form-group"><label for="first_name"><strong>Pieza</strong></label><input class="form-control" type="text" placeholder="{{$estufa->pieza}}" name="fecha" disabled></div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group"><label for="last_name"><strong>Precio Pieza</strong></label><input class="form-control" type="text" placeholder="{{$estufa->precio_pieza}}" name="ubicacion" disabled></div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
</div>

@endsection
