<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Permite instalar Bootstrap CSS desde un servidor-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!--Instala styles.css, archivo con estilos adicionales que se debe crear en la carpeta css dentro de la raiz del proyecto, debe importarse luego del de Bootstrap-->
    <link rel="stylesheet" href="./css/styles.css">

    <!--Instala behavior.js, archivo con comportamientos javascript que se debe crear en la carpeta js dentro de la raiz del proyecto-->
    <script src="./js/behavior.js"></script>

    <!-- Fonts Google -->
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>AstroEnergy SAS</title>
</head>

<body>
    <?php
        include "./header.php"
    ?>
    <!-- Inicia barra navegación -->
    <div class="navbar-expand-md navbar-dark bg-dark sticky-top">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 nav">
                <li class="nav-item d-none d-sm-block">
                    <a class="btn pt-2" aria-current="page" href="#somos">Somos</a>
                </li>
                <li class="nav-item">
                    <a class="btn pt-2" aria-current="page" href="#servicios">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="btn pt-2 me-5" aria-current="page" href="#portafolio">Portafolio</a>
                </li>
                <li class="nav-item">
                    <a class="btn pt-2" aria-current="page" href="tienda.php">Tienda</a>
                </li>
                <li class="nav-item">
                    <a class="btn pt-2" aria-current="page" href="noticias.php">Noticias</a>
                </li>
                <li class="nav-item me-5">
                    <a class="btn pt-2" aria-current="page" href="#contacto">Contacto</a>
                </li>
                <li class="nav-item ms-5">
                    <a class="btn" aria-current="page" data-bs-toggle="modal" data-bs-target="#ingresa">Ingresa o Regístrate</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Termina barra navegación -->
    <div>
        <a href="#"><button type="button" class="fixed-bottom btn btn-secondary btn-circle"><small><i class="fas fa-arrow-up"></i></small></button></a>
    </div>
    <main>
        <article>
            <div class="container">
                <!-- Somos -->
                <div class="d-none d-sm-block" id="somos">
                    <br><br>
                    <h2 class="text-center title">Quienes somos</h2>
                    <div class="row">
                        <div class="columns col-lg-8 col-sm-8 ajuste">
                            <br><br>
                            <h5>ASTROENERGY S.A. es una empresa que ofrece el servicio diseño, instalación y mantenimiento de sistemas fotovoltaicos. Esta empresa, fundada en 2018 por Fernando Fernández y John Fredy Combita, busca masificar el uso de la energía solar a todos los hogares y comercios de Colombia; creando una solución de hardware y software que les permita a todos los Colombianos conocer su perfil de consumo por minutos, horas, meses y años, y así con esta información recibir consejos y soluciones fáciles para realizar eficiencia energética, ahorro en la factura de energía y ser más amigables con el medio ambiente.
                            </h5><br><br>
                        </div>
                        <div class="d-flex flex-wrap align-items-center columns col-lg-4 col-sm-4 instalador">
                            <img class="align-middle ajuste_img" src="img/instalador.png">
                        </div>
                    </div>
                </div>
                <!-- Termina Somos -->
                <!-- Servicios -->
                <section id="servicios"></section>
                <br><br>
                <div class="row">
                    <div class="columns col-lg-12">
                        <h2 class="text-center title">Nuestros Servicios</h2>
                        <br>
                        <h5>Sistemas generadores de energía renovable, sistemas fotovoltaicos 100% energía solar, mantenimiento preventivo, con los protocolos de seguridad y personal idóneo, y mucho más.</h5>
                        <br>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 row-cols-xl-4 mb-3 text-center g-4">
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm h-100 color">
                            <div class="card-header py-3 tarjeta-flip">
                                <h4 class="my-0 fw-normal"><i class="fas fa-solar-panel"></i><br>Paneles<br><br></h4>
                            </div>
                            <div class="card-body tarjeta-flip">
                                <h5 class="text-justify">Con la ultima tecnología desarrollada para módulos solares, nuestros paneles tienen incluido un recubrimiento de Grafeno, el cual es un sistema de auto limpieza lo que permite tener mantenimientos de limpieza mas prolongados y aumentar la eficiencia en un 2% adicional.</h5>
                            </div>
                            <div class="card-footer">
                                <a href="#contacto">
                                    <button type="button" class="w-100 btn btn-success btn-lg btn-outline-primary">Contáctanos</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm h-100 color">
                            <div class="card-header py-3 tarjeta-flip">
                                <h4 class="my-0 fw-normal"><i class="fas fa-car-battery"></i><br>Baterías<br><br></h4>
                            </div>
                            <div class="card-body tarjeta-flip">
                                <div>
                                    <h5 class="text-justify">Con Fabricacion Suiza, 10 años de garantìa, equipos con salida a 120V opción de conexción en paralelo y serie, lo que lo vconvierte en un equipo para uso desde sistemas pequeños hasta de gran escala.</h5>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="#contacto">
                                    <button type="button" class="w-100 btn btn-success btn-lg btn-outline-primary">Contáctanos</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm h-100 color">
                            <div class="card-header py-3 tarjeta-flip">
                                <h4 class="my-0 fw-normal"><i class="fas fa-users-cog"></i><br>Instalación y Mantenimiento</h4>
                            </div>
                            <div class="card-body tarjeta-flip">
                                <div class="mb-5">
                                    <h5 class="text-justify">Nuestros ingenieros estan capacitados y nuestro laboratorio Certificado por las Fabricas para ofrecer un servicio tecnico de alta calidad y con el mayor respaldo.</h5>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="#contacto">
                                    <button type="button" class="w-100 btn btn-success btn-lg btn-outline-primary">Contáctanos</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm h-100 color">
                            <div class="card-header py-3 tarjeta-flip">
                                <h4 class="my-0 fw-normal"><i class="fas fa-headset"></i><br>Asistencia<br><br></h4>
                            </div>
                            <div class="card-body tarjeta-flip">
                                <div>
                                    <h5>Brindamos atención telefónica y/o Presencial para cualquier requierimiento del cliente, podemos programar los equipos previo envio o realizar la programacion en tiempo real por videollamada y demás.</h5>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="#contacto">
                                    <button type="button" class="w-100 btn btn-success btn-lg btn-outline-primary">Contáctanos</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                </section>
                <br>
                <!-- Termina Servicios -->
                <!-- Call to Action-->
                <section id="accion" class="fondo2"></section>
                <br>
                <!-- Termina Call to Action-->
                <!-- Portafolio -->
                <section id="portafolio">
                    <br><br>
                    <div class="row">
                        <div class="columns col-lg-12">
                            <h2 class="text-center title">Nuestro Portafolio</h2><br>
                            <h5 class="text-center">Conjunto de productos que tenemos para solucionar cualquier necesidad.<br><br></h5>
                        </div>
                    </div>
                    <div class="row row-cols-1 row-cols-lg-4 row-cols-md-3 mb-3 text-center">
                        <div class="col">
                            <div class="card mb-4 rounded-3 shadow-sm">
                                <div class="card-header py-3">
                                    <h2 class="my-0 fw-normal">PANELES</h2>
                                </div>
                                <div class="card-body">
                                    <a data-bs-toggle="modal" data-bs-target="#panel">
                                        <img src="./img/producto1.jpg" width="100%" />
                                        <h3>Click para información</h3>
                                    </a>

                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card mb-4 rounded-3 shadow-sm">
                                <div class="card-header py-3">
                                    <h2 class="my-0 fw-normal">BATERIAS</h2>
                                </div>
                                <div class="card-body">
                                    <a data-bs-toggle="modal" data-bs-target="#bateria">
                                        <img src="./img/producto2.jpg" width="100%" />
                                        <h3>Click para información</h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card mb-4 rounded-3 shadow-sm">
                                <div class="card-header py-3">
                                    <h2 class="my-0 fw-normal">INVERSORES</h2>
                                </div>
                                <div class="card-body">
                                    <a data-bs-toggle="modal" data-bs-target="#inversor">
                                        <img src="./img/producto3.jpg" width="100%" />
                                        <h3>Click para información</h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card mb-4 rounded-3 shadow-sm">
                                <div class="card-header py-3">
                                    <h2 class="my-0 fw-normal">OTROS</h2>
                                </div>
                                <div class="card-body">
                                    <a data-bs-toggle="modal" data-bs-target="#otros">
                                        <img src="./img/producto4.jpg" width="100%" />
                                        <h3>Click para información</h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Termina Portafolio -->
                <?php
                    include "contacto.php"
                ?>
            </div>
        </article>
    </main>
    <?php
        include "footer.php";
        include "modals.php"
    ?>
    <!--Javascript adicionales-->

    <!--Permite instalar popper-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

    <!--Permite instalar Bootstrap JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>

</html>