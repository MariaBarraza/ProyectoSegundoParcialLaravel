@extends('layouts.admin.inicio')



@section('contenido')

<div class="col-lg-12">
<a class="btn btn-primary btn-sm" style="margin-left: 11px" href="{{route('estufasReparar.index')}}">
    <i class="fas fa-arrow-left"></i>
        Volver a lista de tareas
</a>
<br><br>
                                <div class="card shadow mb-3">
                               
                                    <div class="card-body">
                                    <form method="POST" enctype="multipart/form-data" action="{{route('estufasReparar.store')}}">
                                    @csrf
                                            <div class="form-row">
                                            <div class="form-group" >
                         
                                            </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                    <label for="email"><strong>Tipo tarea</strong></label>
                                                    <select name="tipo_tarea" class="form-control" data-toggle="dropdown" aria-expanded="false">
                                                        <option value="Reparacion" class="dropdown-item" role="presentation">Reparación</option>
                                                </select>

                                                </div>
                                             </div>
                                                <div class="col">
                                                    <div class="form-group"><label for="email"><strong>Ubicacion</strong></label><input class="form-control" type="text" placeholder="ubicación" name="ubicacion"></div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="form-group"><label for="first_name"><strong>Encargado</strong></label><input class="form-control" type="text" placeholder="encargado" name="encargado"></div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group"><label for="last_name"><strong>Nombre tarea</strong></label><textarea class="form-control" type="text" placeholder="descripción" name="descripcion" ></textarea></div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="form-group"><label for="first_name"><strong>Estado</strong></label><input class="form-control" type="text" placeholder="estado" name="estado" ></div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="form-group"><label for="first_name"><strong>Fecha</strong></label><input class="form-control" type="text" placeholder="fecha" name="fecha" ></div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="form-group"><label for="last_name"><strong>Pieza</strong></label><input type="text" name="pieza" placeholder="pieza" class="form-control" /></div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="form-group"><label for="last_name"><strong>Precio Pieza</strong></label><input type="text" placeholder="precio pieza" name="precio_pieza" class="form-control"/></div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group"><label for="last_name"><strong>Foto resultado</strong></label><input type="file" placeholder="foto resultado" name="imgPortada" class="form-control"/></div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="form-group"><label for="last_name"><strong>Id encargado</strong></label><input type="text" placeholder="id encargado" name="id_usuario" class="form-control"/></div>
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
