<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Reparaciónes Lunasticas</title>
        <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
        <link rel="stylesheet" href="/assets/fonts/fontawesome-all.min.css">
        @yield('estilos')
    </head>

    <body id="page-top">
        <div id="wrapper">
            <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
                <div class="container-fluid d-flex flex-column p-0">
                    <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                        <div class="sidebar-brand-icon rotate-n-15"><i class="fas  fa-moon"></i></div>
                        <div class="sidebar-brand-text mx-3"><span>Lunasticas</span></div>
                    </a>
                    <hr class="sidebar-divider my-0">
                    <ul class="nav navbar-nav text-light" id="accordionSidebar">
                        <li class="nav-item" role="presentation"><a class="nav-link" href="{{route('index')}}"><i class="fas fa-binoculars"></i><span>Mostrar tareas</span></a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="{{route('estufas.index')}}"><i class="fas fa-book"></i><span>Agregar/Editar tareas Instalaciones</span></a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="{{route('estufasReparar.index')}}"><i class="fas fa-book"></i><span>Agregar/Editar tareas Reparaciones</span></a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="{{route('usuarios.index')}}"><i class="fas fa-user-circle"></i><span>Crear Usuario</span></a></li>
                    </ul>
                    <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
                </div>
            </nav>
            <div class="d-flex flex-column" id="content-wrapper">
                <div id="content">
                    <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                        <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                      
                         <ul class="nav navbar-nav flex-nowrap ml-auto">
                            <div class="d-none d-sm-block topbar-divider"></div>
                                <li class="nav-item dropdown no-arrow" role="presentation">
                                <a class="dropdown-toggle nav-link" aria-expanded="false" href="#"><span class="d-none d-lg-inline mr-2 text-gray-600 small">{{Auth::user()->name}}</span></a>
                                   
                                </li>
                                <li class="nav-item dropdown no-arrow" role="presentation">
                                <a class="dropdown-toggle nav-link" aria-expanded="false" href="{{route('logout')}}" id="linkLogout"><span class="d-none d-lg-inline mr-2 text-gray-600 small">Cerrar sesión</span></a>
                                <form id="formLogout" action="{{route('logout')}}" method="POST">
                                    @csrf
                                </form>   
                                </li>
                         </ul>
               
                </div>
                </nav>
                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                    @yield('contenido')
                </div>
            </div>

        </div>

  
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>
        <script src="/assets/js/jquery.min.js"></script>
        <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="/assets/js/chart.min.js"></script>
        <script src="/assets/js/bs-init.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
        <script src="/assets/js/theme.js"></script>

        <script>
  function doClickLinkLogout(e) {
    e.preventDefault();
    $("#formLogout").submit();
  }
  $(function() {
    $("#linkLogout").click(doClickLinkLogout);
  });
</script>
            @yield('scripts')
    </body>
</html>
