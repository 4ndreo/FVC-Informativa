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


<section class="trabajo container" id="actividades">
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
        <video autoplay muted loop>
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
<section class="contacto container">
    <div class="cont-contacto-lista">
        <div class="d-flex flex-column justify-content-between">
            <div class="">
                <h2 class="negrita">Contacto</h2>
                <p class="negrita">Horarios: Lunes a Viernes de 13:30hs a 18hs</p>
            </div>
            <ul class="contacto-lista">
                <li class="contacto-item negrita whatsapp">Whatsapp: <a href="https://walink.co/2062c6">11 3573-3949</a>
                </li>
                <li class="contacto-item negrita email">Email: <a
                        href="mailto:v-crespo@cruzroja.org.ar">v-crespo@cruzroja.org.ar</a></li>
                <li class="contacto-item negrita telefono">Teléfono: <a href="tel:45543820">4554-3820</a></li>
                <li class="contacto-item negrita direccion">Dirección: <a
                        href="https://goo.gl/maps/XYHRK7t6zgTWJxKU8">Av. Córdoba 6434</a></li>
                <li class="contacto-item negrita prensa">Prensa: <a href="#">A DEFINIR</a></li>
            </ul>
        </div>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3284.8628167382426!2d-58.45284542343148!3d-34.58233755637096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb5ef4a9eab37%3A0x6c44823c4be0917f!2sAv.%20C%C3%B3rdoba%206434%2C%20C1427BZR%20CABA!5e0!3m2!1ses!2sar!4v1682135449099!5m2!1ses!2sar"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>

@endsection