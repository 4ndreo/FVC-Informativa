{{--

@extends(path)
Path debe ser la ruta, a partir de [resources/views]
Debemos aclarar en que espacio "cedido" por el template queremos ubicar el contenido, esto se logra con:
@section('name') y @endsection


--}}

@extends('layouts.main') {{-- Esto navega a [resources/views/layouts/main.blade.php] --}}

@section('title', 'Integrantes')

@section('main')
<section class="container cont-blog py-4 mb-4">

    <h1 class="negrita">¡Sumate al voluntariado!</h1>

    <p>¡Hola! Muchas gracias por tu interés en formar parte de nuestro Voluntariado y sumarte al equipo de <span
            class="negrita">Cruz Roja Argentina Filial Villa Crespo</span>.</p>
    <p>Queremos contarte que el <span class="negrita">proceso de incorporación</span> consta de 3 etapas obligatorias:
    </p>
    <ol class="ingresantes-proceso-lista">
        <li>
            <span class="proceso-item-title place-center"><h2>Charla Inicial</h2></span>
            <p><span class="negrita">Una charla inicial</span> en donde que te mostraremos qué hacemos y cómo se organiza nuestra filial. También te  compartiremos nuestros documentos fundamentales para que puedas comenzar a leerlos y conocernos a través de ellos. Por último te pediremos completar un formulario de datos personales a modo de oficializar tu proceso de incorporación.</p>
        </li>
        <li>
            <span class="proceso-item-title place-center"><h2>Taller de formación institucional (FIB)</h2></span>
            <span class="negrita">Un taller de formación institucional (FIB)</span> en la que te presentaremos en profundidad nuestra historia, nuestros Principios Fundamentales y otros datos cruciales necesarios que conozcas antes de sumarte a nuestro accionar. Este taller genera un certificado, y <span class="negrita">deberás presentarlo para acceder a la tercera etapa</span>.
        </li>
        <li>
            <span class="proceso-item-title place-center"><h2>Entrevista</h2></span>
            <span class="negrita">Una entrevista</span> con gestión del voluntariado, en la que podrás sacarte todas las dudas que tengas y nos dará la oportunidad de conocerte un poco más.
        </li>
    </ol>
    <p class="negrita">Deberás completar los requerimientos de cada instancia. De esta manera, quedará en manifiesto tu
        deseo de
        continuar con el proceso.</p>
    <p class="negrita">¡Nos alegra muchísimo que desees sumarte a este Movimiento para seguir cambiando realidades!</p>

</section>
@endsection