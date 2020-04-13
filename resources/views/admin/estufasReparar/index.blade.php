@extends('layouts.admin.inicio')


@section('breadcrumbs')
@endsection

@section('contenido')
<!-- Modal -->
<div id="DeleteModal" class="modal fade text-danger" role="dialog">
    <div class="modal-dialog ">
      <!-- Modal content-->
      <form action="" id="deleteForm" method="post">
          <div class="modal-content">
              <div class="modal-header bg-danger">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title text-center">Borrar Tarea</h4>
              </div>
              <div class="modal-body">
                 @csrf
                 @method('DELETE')
                  <p class="text-center">¿Seguro que quieres borrar la tarea?</p>
              </div>
              <div class="modal-footer">
                      <button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
                      <button type="submit" name="" class="btn btn-danger" data-dismiss="modal" onclick="formSubmit()">Si, borrar</button>
              </div>
          </div>
      </form>
    </div>
</div>




<div class="col-md-12">

    @if(Session::has('exito'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon fas fa-check"></i>¡Exito!</h5>
        {{Session::get('exito')}}
    </div>
    @endif

    @if(Session::has('error'))
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon fas fa-check"></i> ¡Error! </h5>
        {{Session::get('error')}}
    </div>
    @endif

    <div class="card">

        <div class="card-header">

            <h3 class="card-title">Lista de tareas</h3>
            <a href="{{route('estufasReparar.create')}}" class="btn btn-primary">
             <i class="fas fa-plus"></i>Agregar Tarea
            </a>
        </div>
    
        <div class="card-body">
        <form action="/search">
                <div class="row">
                    <div class="col-md-4">
                        <select name="filtro" class="form-control" data-toggle="dropdown" aria-expanded="false">
                            <option value="fecha" class="dropdown-item" role="presentation">Filtrar por fecha</option>
                            <option value="estado" class="dropdown-item" role="presentation">Filtrar por estado de la tarea</option>
                            <option value="usuario" class="dropdown-item" role="presentation">Filtrar por usuario</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <input type="text" name="search" class="form-control" aria-controls="dataTable" placeholder="Buscar...">
                    </div>

                    <div class="col-md-4">
                        <button class="btn btn-primary">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
           <div class="row">
            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <table class="table dataTable my-0" id="dataTable">
                                                <thead>
                                                <tr>
                                                        <th>Tarea</th>
                                                        
                                                        <th>Encargado</th>
                                                        <th>Estado</th>
                                                        <th>Fecha</th>
                                                        <th>Acciones</th>
                                                    </tr>
                                                </thead>
                                             <tbody>
                                                @foreach($estufas as $estufa)  
                                                <tr>
                                                    <td>{{$estufa->descripcion}}</td>
                                                    <td>{{$estufa->encargado}}</td>
                                                    
                                                    <td>{{$estufa->estado}}</td>
                                                    <td>{{$estufa->fecha}}</td>

                                                    <td>
                                                    <form method="POST" action="{{route('estufasReparar.index', $estufa->id)}}">
                                                        <a href="{{route('estufasReparar.show',$estufa->id)}}" class="btn btn-primary">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                        <a href="{{route('estufasReparar.edit',$estufa->id)}}" class="btn btn-success">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                        </a>
                                            
                                                @csrf
                                                @method('DELETE')

                                                <a href="javascript:;" data-toggle="modal" onclick="deleteData({{$estufa->id}})" data-target="#DeleteModal" class="btn btn-danger">
                                                    <i class="fas fa-times"></i>
                                                </a>
                                                    </form>
                                                    </td>

                                                </tr>
                                            @endforeach
                                        </tbody>
                                
                  </table>
             </div>
           </div>
        </div>
    </div>
</div>
    @endsection


    @section('scripts')
        <script type="text/javascript">
            function deleteData(id)
            {
                var id = id;
                var url = '{{ route("estufasReparar.destroy", ":id") }}';
                url = url.replace(':id', id);
                $("#deleteForm").attr('action', url);
            }
            function formSubmit()
            {
                $("#deleteForm").submit();
            }
         </script>
    @endsection

