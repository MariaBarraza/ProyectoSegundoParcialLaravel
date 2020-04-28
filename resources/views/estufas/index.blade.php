@extends('layouts.admin.inicio')


@section('breadcrumbs')
@endsection

@section('contenido')

<div class="card-body">
                        <div class="row">
<div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
<table class="table dataTable my-0" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>Tarea</th>
                                        <th>Tipo tarea</th>
                                        <th>Encargado</th>
                                        <th>Descripción</th>
                                        <th>Estado</th>
                                        <th>Material</th>
                                        <th>Fecha</th>
                                        <th>Ubicación</th>
                                        <th>Foto Resultado</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($estufas as $estufa)    
                                <tr>
                                    <td>{{$estufa->id}}</td>
                                    <td>{{$estufa->tipo_tarea}}</td>
                                    <td>{{$estufa->encargado}}</td>
                                    <td>{{$estufa->descripcion}}</td>
                                    <td>{{$estufa->estado}}</td>
                                    <td>{{$estufa->material}}</td>
                                    <td>{{$estufa->fecha}}</td>
                                    <td>{{$estufa->ubicacion}}</td>
                                    <td><a href="/storage/portadas/{{$estufa->foto_resultado}}" target="_blank">
                                <img style="width: 50px; heigh: auto;" src="/storage/portadas/{{$estufa->foto_resultado}}" /></td>
                                </tr>
                                @endforeach
                                </tbody>
                                
                            </table>


                        </div>
</div>
</div>
@endsection
