@extends('layouts.admin.inicio')



@section('contenido')

<div class="col-lg-12">
<a class="btn btn-primary btn-sm" style="margin-left: 11px" href="{{route('usuarios.index')}}">
    <i class="fas fa-arrow-left"></i>
        Volver a lista de usuarios
</a>
<br><br>
                                <div class="card shadow mb-3">
                                    <div class="card-header py-3">
                                        <p class="text-primary m-0 font-weight-bold">Usuarios
                                     
                                        </p>
                                    </div>
                                    <div class="card-body">
                                        <form>
                                          
                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="form-group"><label for="username"><strong>Usuario</strong></label><input class="form-control" type="text" placeholder="{{$usuario->email}}" name="email" disabled></div>
                                                </div>
                                              
                                            </div>
                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="form-group"><label for="first_name"><strong>Nombre</strong></label><input class="form-control" type="text" placeholder="{{$usuario->name}}" name="name" disabled></div>
                                                </div>
                                               
                                            </div>
                                            <div class="form-row">
                                            <div class="col">
                                                    <div class="form-group"><label for="email"><strong>Tipo usuario</strong></label><input class="form-control" type="text" placeholder="{{$usuario->tipo}}" name="tipo"  disabled></div>
                                                </div>
                                                
                                            </div>
                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="form-group"><label for="first_name"><strong>Contraseña</strong></label><input class="form-control" type="text" placeholder="{{$usuario->password}}" name="password" disabled></div>
                                                </div>
                                               
                                            </div>
                                        </form>
                                    </div>
                                </div>
</div>

@endsection
