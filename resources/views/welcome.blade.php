<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cruz Roja</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
          crossorigin="anonymous">
    <link rel="stylesheet" href="<?= url('css/estilos.css'); ?>">

</head>
<body>
    <div id="app">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?= url('/') ?>">Cruz Roja</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?= url('/'); ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?= url('cursos'); ?>">Cursos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?= url('admin/cursos'); ?>">Administrar Cursos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="container py-4">
            <section class="row">

                <div class="col-9">
                    <h1>Cruz Roja Argentina</h1>

                    <p>Somos una asociación civil, humanitaria y de carácter voluntario, con presencia en el territorio argentino, y parte integrante del
                        Movimiento Internacional de la Cruz Roja y de la Media Luna Roja, la red humanitaria más grande del mundo presente en 191 países.
                        Capacitamos en Primeros Auxilios a más de 50.000 personas por año en el país y brindamos cobertura a los asistentes en eventos masivos.</p>
                </div>


                <div class="col-4">
                    <h2>Acciones Humanitarias</h2>

                    <p>
                        Desarrollamos acciones humanitarias junto a las comunidades, promoviendo la reducción de riesgos y el desarrollo integral de las personas,
                        construyendo y fortaleciendo las capacidades locales, fomentando la inclusión y participación de todos los grupos sin ninguna distinción o discriminación.
                    </p>
                </div>

                <div class="col-4">
                    <h2>Siempre Presentes</h2>

                    <p>Desde Cruz Roja estamos presentes en cada gran emergencia, cuando ocurre el desastre y después, cuando los hechos dejan de ser noticia.</p>
                </div>

                <div class="col-4">
                    <h2>Programas y Servicios</h2>
                    <p>A través de nuestros distintos programas y servicios educativos, deseamos construir una sociedad más justa y más incluyente con los sectores en
                        situación de vulnerabilidad, para que tengan acceso a fuentes de bienestar, seguridad e igualdad de oportunidades.</p>
                </div>


                <div class="col-6">
                    <h2>Cruz Roja siempre está</h2>
                    <p>
                        En todo momento, a través de nuestras 66 filiales, acompañamos al crecimiento de las comunidades fortaleciendo la resiliencia y promoviendo
                        la planificación para estar mejor preparados ante emergencias y desastres.
                    </p>
                </div>

                <div class="col-6">
                    <h2>Trabajando juntos</h2>
                    <p>
                        Trabajamos en la promoción de la salud y el desarrollo comunitario, reforzando la prevención de enfermedades prevalentes, y la reducción de
                        la vulnerabilidad del VIH desde un enfoque de promoción de derechos, de género y de diversidad.
                    </p>
                </div>



            </section>

            <section class="row">

                <div class="col-12">
                    <h1>Principios fundamentales</h1>
                </div>

                <div class="col-3">
                    <h2>Humanidad</h2>
                    <p>El Movimiento de la Cruz Roja y de la Media Luna Roja, al que ha dado nacimiento la preocupación de prestar auxilio,
                        sin discriminación, a todos los heridos en los campos de batalla, se esfuerza, bajo su aspecto internacional y nacional,
                        en prevenir y aliviar el sufrimiento de los hombres en todas las circunstancias.</p>
                </div>

                <div class="col-3">
                    <h2>Imparcialidad</h2>
                    <p>No hace ninguna distinción de nacionalidad, raza, religión, condición social ni credo político. Se dedica únicamente a
                        socorrer a los individuos en proporción con los sufrimientos, remediando sus necesidades y dando prioridad a las más urgentes.</p>
                </div>

                <div class="col-3">
                    <h2>Neutralidad</h2>
                    <p>Con el fin de conservar la confianza de todos, el movimiento se abstiene de tomar parte en las hostilidades y,
                        en todo tiempo, en las controversias de orden político, racial, religioso o ideológico.</p>
                </div>

                <div class="col-3">
                    <h2>Independencia</h2>
                    <p>Auxiliares de los poderes públicos en sus actividades humanitarias y sometidas a las leyes que rigen los países respectivos, las
                        Sociedades Nacionales deben, sin embargo, conservar una autonomía que les permita actuar siempre de acuerdo con los principios del Movimiento.</p>
                </div>

                <div class="col-3">
                    <h2>Voluntariado</h2>
                    <p>Es un movimiento de socorro voluntario y de carácter desinteresado.</p>
                </div>

                <div class="col-3">
                    <h2>Unidad</h2>
                    <p>En cada país sólo puede existir una Sociedad de la Cruz Roja o de la Media Luna Roja, que debe ser accesible a todos y extender su acción
                        humanitaria a la totalidad del territorio.</p>
                </div>

                <div class="col-3">
                    <h2>Universalidad</h2>
                    <p>El Movimiento Internacional de la Cruz Roja y de la Media Luna Roja, en cuyo seno todas las Sociedades tienen los mismos derechos y el
                        deber de ayudarse mutuamente, es universal.</p>
                </div>




            </section>
        </main>

        <footer class="footer">
            <p>Francisco Andreo y Roni Gueiser</p>
        </footer>
    </div>
</body>
</html>
