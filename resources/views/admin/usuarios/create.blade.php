@extends('layouts.admin.inicio')



@section('contenido')
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

<div class="col-lg-12">
<a class="btn btn-primary btn-sm" style="margin-left: 11px" href="{{route('usuarios.index')}}">
    <i class="fas fa-arrow-left"></i>
        Volver a lista de usuarios
</a>
<br><br>
                                <div class="card shadow mb-3">
                                    <div class="card-header py-3">
                                        <p class="text-primary m-0 font-weight-bold">Crear Usuario
                                     
                                        </p>
                                    </div>
                                    <div class="card-body">
                                    <form method="POST" enctype="multipart/form-data" action="{{route('usuarios.store')}}">
                                                     @csrf
                                          
                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="form-group"><label for="username"><strong>Usuario</strong></label><input class="form-control" type="text" placeholder="usuario" name="email"></div>
                                                </div>
                                              
                                            </div>
                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="form-group"><label for="first_name"><strong>Nombre</strong></label><input class="form-control" type="text" placeholder="name" name="name" ></div>
                                                </div>
                                               
                                            </div>
                                            <div class="form-row">
                                            <div class="col">
                                                    <div class="form-group"><label for="email"><strong>Tipo usuario</strong></label> <select name="tipo" class="form-control" data-toggle="dropdown" aria-expanded="false">
                        <option value="Administrador" class="dropdown-item" role="presentation">Administrador</option>
                        <option value="Usuario" class="dropdown-item" role="presentation">Usuario</option>
                    </select></div>
                                                </div>
                                                
                                            </div>
                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="form-group"><label for="first_name"><strong>Contraseña</strong></label><input id="password" class="form-control" type="password" placeholder="contraseña" name="password" ></div>
                                                </div>
                                                <div class="col">
                                                <label for="">Confirmar contraseña</label> <input id="confirm_password" type="password" name="password" placeholder="confirmar contraseña" class="form-control" required/>
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

@section('scripts')

<script type="text/javascript">
    var password = document.getElementById("password")
    , confirm_password = document.getElementById("confirm_password");
    function validatePassword(){
    if(password.value != confirm_password.value) {
        confirm_password.setCustomValidity("Las contraseñas no coinciden.");
    } else {
        confirm_password.setCustomValidity('');
    }
    }
    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;
 </script>

@endsection