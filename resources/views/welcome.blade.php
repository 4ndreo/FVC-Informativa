{{--

@extends(path)
Path debe ser la ruta, a partir de [resources/views]
Debemos aclarar en que espacio "cedido" por el template queremos ubicar el contenido, esto se logra con:
@section('name') y @endsection


--}}

@extends('layouts.main') {{-- Esto navega a [resources/views/layouts/main.blade.php] --}}

@section('title', 'Cruz Roja - Villa Crespo')

@section('main')
<section class="container-fluid hero d-flex">
    <div class="hero-text-cont d-flex flex-column container">
        <div class="hero-text w-50">
            <h1 class="cr-title mb-5">Cruz Roja Argentina</h1>

            <p class="mb-5">Desde Filial Villa Crespo creemos en el fortalecimiento de las comunidades con las que
                trabajamos, implementando medidas conjuntas y articulando con distintas organizaciones, con el fin de
                aliviar el sufrimiento de todas las personas en situación de vulnerabilidad. Algunas de las actividades
                que realizamos son las coberturas sanitarias de eventos masivos (recitales, eventos deportivos, etc), la
                promoción de la salud y la diversidad en difusiones, talleres escolares y el dictado de cursos de
                primeros auxilios.</p>
            <a class="btn d-block m-auto w-50">+ Conocé más</a>
        </div>
    </div>
    <div class="hero-image-cont w-50 ">
        <div class="hero-overlay"></div>
        <div class="hero-image"></div>
    </div>

</section>


<section class="trabajo container">
    <h2 class="negrita">Nuestro trabajo</h2>
    <ul>
        <li><a href="#"><span>Cursos</span></a></li>
        <li><a href="#"><span>Voluntariado</span></a></li>
        <li><a href="#"><span>Coberturas</span></a></li>
        <li><a href="#"><span>Empresas</span></a></li>
        <li><a href="#"><span>Centro de testeo</span></a></li>
        <li class="visually-hidden"><a href="#"></a></li>
    </ul>

</section>
<section>

    <div id="homeCarousel" class="home-carousel carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/carrousel-1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/carrousel-2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/carrousel-3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#homeCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#homeCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>
<section class="coberturas container">
    <h2 class="negrita">Coberturas Sanitarias</h2>

    <div class="cont-info-coberturas">
        <video autoplay muted>
            <source src="img/Resumen2022_Asamblea.mp4">
        </video>
        <div class="cont-texto">
            <p>Nuestro compromiso con la salud y el bienestar de la comunidad nos lleva a ofrecer servicios de
                Coberturas Sanitarias para eventos y producciones.</p>

            <p>Sabemos que en la actualidad la salud es una preocupación prioritaria en cualquier actividad que
                involucre a un grupo de personas. Por ello, nuestra filial cuenta con un equipo de profesionales
                altamente capacitados en la implementación de medidas de prevención y cuidado de la salud en todo tipo
                de eventos y producciones.</p>

            <p>Ofrecemos una amplia gama de servicios de Coberturas Sanitarias adaptados a las necesidades de cada
                evento, desde pequeñas reuniones hasta grandes producciones. Nuestros servicios incluyen la realización
                de controles de temperatura, aplicación de protocolos sanitarios, suministro de elementos de protección
                personal y la coordinación de acciones ante situaciones de emergencia.</p>

            <p>Si estás organizando un evento o producción y buscás garantizar la seguridad y salud de tus asistentes,
                no dudes en contactarnos. En Cruz Roja filial Villa Crespo, nos encargamos de cuidar de vos y de tu
                evento.</p>
            <a class="btn d-block  w-25">+ Conocé más</a>
        </div>
    </div>
</section>

<section class="cont-cursos-home d-flex flex-column">
    <h2>Cursos</h2>

    <p>Desde Cruz Roja nos enfocamos en agrandar nuestra comunidad y tener más gente con conocimiento en las calles,
        para que ante cualquier problema haya gente que pueda ayudar a los demás con la capacitación necesaria para
        responder.
    </p>
    <p>Tenemos distintos cursos en los que te podés inscribir y así ser parte de un movimiento que prioriza la salud
        y bienestar de los demás
    </p>


    <a href="{{url('cursos')}}" class="btn btn-ver-cursos">Ver cursos</a>
</section>
@endsection