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
                                    <form method="POST" enctype="multipart/form-data" action="{{route('estufas.store')}}">
                                    @csrf
                                            <div class="form-row">
                                            <div class="form-group" >
                         
                                            </div>
                                                <div class="col">
                                                    <div class="form-group"><label for="email"><strong>Tipo tarea</strong></label><input class="form-control" type="text" placeholder="tipo tarea" name="tipo_tarea"></div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group"><label for="email"><strong>Ubicacion</strong></label><input class="form-control" type="text" placeholder="tipo tarea" name="ubicacion"></div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="form-group"><label for="first_name"><strong>Encargado</strong></label><input class="form-control" type="text" placeholder="encargado" name="encargado"></div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group"><label for="last_name"><strong>Descripción</strong></label><textarea class="form-control" type="text" placeholder="descripcion" name="descripcion" ></textarea></div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="form-group"><label for="first_name"><strong>Estado</strong></label><input class="form-control" type="text" placeholder="estado" name="estado" ></div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group"><label for="last_name"><strong>Material</strong></label><input class="form-control" type="text" placeholder="material" name="material" ></div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="form-group"><label for="first_name"><strong>Fecha</strong></label><input class="form-control" type="text" placeholder="fecha" name="fecha" ></div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group"><label for="last_name"><strong>Foto Resultado</strong></label><input type="file" name="imgPortada" class="form-control" name="foto_resultado"/></div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                            <div class="form-group">

                                                <button class="btn btn-primary">Guardar</button>

                                            </div>
                                            </div>
                                            
                                        </form>
                                    </div>
                                </div>
</div>

@endsection
