{{--
Este archivo funciona como nuestro template de base
--}}

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>


    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{url('css/estilos.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/svg-with-js.min.css"
        integrity="sha512-j+8sk90CyNqD7zkw9+AwhRuZdEJRLFBUg10GkELVu+EJqpBv4u60cshAYNOidHRgyaKNKhz+7xgwodircCS01g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    {{-- <div id="app" class="flex-wrapper"> --}}
        <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top navbar-base">
            <div class="container navbar-ddown">
                <a class="navbar-brand" href="{{url('/')}}">Cruz Roja</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Navegación</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/')}}">Inicio</a>
                            </li>
                            <li class="nav-item dropdown" id="myDropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Servicios</a>
                                <ul class="nav-item dropdown-menu">
                                    <li class="sub-ddown-cont dropdown">
                                        <a class="sub-ddown dropdown-item" href="#">Cursos
                                            &raquo; </a>
                                        <ul class="closed-ddown submenu dropdown-menu">
                                            <li><a class="dropdown-item"
                                                    href="https://www.eventbrite.com.ar/o/cruz-roja-argentina-filial-villa-crespo-12660624312"
                                                    target="_blank">Primeros Auxilios</a></li>
                                            <li><a class="dropdown-item" href="{{url('cursos')}}">Charlas
                                                    Comunitarias</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{url('cursos')}}">Empresas</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{url('cursos')}}">Coberturas
                                            Sanitarias</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{url('nosotros')}}">Nosotros</a>
                            </li>
                            <li class="nav-item dropdown" id="myDropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Voluntariado</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Información</a></li>
                                    <li><a class="dropdown-item" href="#">Participación/asociados</a></li>
                                    <li><a class="dropdown-item" href="#">Sumarse al voluntariado</a></li>
                                    <li><a class="dropdown-item" href="#">Proceso de incorporación</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('blog')}}">Bibliografía</a>
                            </li>
                            <li class="btn">
                                <a class="nav-link" href="{{url('contacto')}}">Contacto</a>
                            </li>
                            {{-- Si usuario autenticado --}}
                            @if(Auth::user())
                            {{-- Si usuario Admin --}}
                            @if(Auth::user()->esAdmin())
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Panel
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" aria-current="page"
                                            href="{{url('admin/cursos')}}">Administrar Cursos</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" aria-current="page"
                                            href="{{url('admin/novedades')}}">Administrar Blog</a>
                                    </li>

                                    <li>
                                        <a class="dropdown-item" aria-current="page"
                                            href="{{url('admin/usuarios')}}">Administrar Usuarios</a>
                                    </li>
                                </ul>
                            </li>
                            @endif
                            {{-- Fin usuario admin --}}
                            <li class="nav-item">
                                <form action="{{route('auth.logout')}}" method="post">
                                    @csrf
                                    <button type="submit" class="btn nav-link">Cerrar Sesion</button>
                                </form>
                            </li>
                            @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('auth.login.form') }}">Iniciar Sesion</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('registrar.usuario') }}">Registrarse</a>
                            </li>
                            @endif
                            {{-- Fin usuario autenticado --}}
                        </ul>
                    </div>
                </div>
            </div>
        </nav>




        <main>

            @if (Session::has('status.message'))
            <div class="alert alert-{{Session::get('status.type') ?? 'info'}}">{!!Session::get('status.message')!!}
            </div>
            @endif
            @yield('main')
        </main>

        <footer class="footer">
            <p>Francisco Andreo y Roni Gueiser</p>
        </footer>
    {{-- </div> --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    {{-- <script>
        document.addEventListener("DOMContentLoaded", function(){
// make it as accordion for smaller screens
if (window.innerWidth < 992) {

  // close all inner dropdowns when parent is closed
  document.querySelectorAll('.navbar .dropdown').forEach(function(everydropdown){
    everydropdown.addEventListener('hidden.bs.dropdown', function () {
      // after dropdown is hidden, then find all submenus
        this.querySelectorAll('.submenu').forEach(function(everysubmenu){
          // hide every submenu as well
          everysubmenu.style.display = 'none';
        });
    })
});
 
document.querySelectorAll('.sub-ddown').forEach(function(element){
    element.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector('.show').className += ' show';
        let nextEl = this.nextElementSibling;
        if(nextEl && nextEl.classList.contains('submenu')) {
            console.log('estoy en submenu')	;
            // prevent opening link if link needs to open dropdown
            e.preventDefault();
            if(nextEl.classList.contains('closed-ddown')) {
                console.log('estoy en closed')	;
                nextEl.classList = 'open-ddown submenu';
                // nextEl.style.display = 'block';
                // nextEl.style.position = 'static';
                // document.querySelectorAll()
            }else if(nextEl.classList.contains('open-ddown')){
                console.log('estoy en open')	;
                nextEl.classList = 'closed-ddown submenu';
                // nextEl.style.display = 'none';
                // nextEl.style.position = 'static';
            } 

        }
    });
  })
}
// end if innerWidth
}); 
// DOMContentLoaded  end
    </script> --}}
</body>

</html>