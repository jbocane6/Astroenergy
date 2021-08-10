<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Permite instalar Bootstrap CSS desde un servidor-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!--Instala styles.css, archivo con estilos adicionales que se debe crear en la carpeta css dentro de la raiz del proyecto, debe importarse luego del de Bootstrap-->
    <link rel="stylesheet" href="./css/styles.css">

    <!-- Fonts Google -->
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <title>Productos</title>
</head>

<body>
    <!-- Inicia el header -->
    <header>
        <div class="hero-section">
            <div class="hero-section-text">
                <img src="./img/logo.png" />
                <h1>ASTROENERGY SAS</h1>
                <h5>Soluciones en energía amigable</h5>
            </div>
        </div>
    </header>
    <!-- Termina header -->
    <!-- Inicia barra navegación -->
    <div class="navbar-expand-md navbar-dark bg-dark sticky-top">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 nav">
                <li class="nav-item">
                    <a class="btn pt-2" aria-current="page" href="index.php">Inicio</a>
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
    <div class="container" id="contaner">
        <br><br>
        <h2 class="text-center title">LISTA DE PRODUCTOS</h2>
        <br>
        <div class='row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-4'>
            <?php
            $conexion = mysqli_connect("localhost", "root", "", "astroenergy") or
                die("Problemas con la conexión");

            $registros = mysqli_query($conexion, "select ProNombre,ProPrecio
                from productos") or
                die("Problemas en el select:" . mysqli_error($conexion));
            $foto = 1;
            while ($reg = mysqli_fetch_array($registros)) {
                $foto++;
                if ($foto > 4)
                    $foto = 0;
                $imagen = '../img/producto' . $foto . '.jpg';
                echo "<div class='col'>
                        <div class='card roun ground'>
                            <img src=$imagen width='100%'/>
                            <div class='card-body'>
                                <h5 align='center'>" . $reg['ProNombre'] . "</h5>
                                <h6 align='center'>$ " . $reg['ProPrecio'] . "</h6>
                            </div>
                            <div class='button-group text-center'>
                                <button class='btn btn-sm btn-secondary me-1'>Añadir</button>
                                <button class='btn btn-sm btn-success ms-1'>Deseos</button>
                            </div>
                        </div>
                    </div>";
            }
            mysqli_close($conexion);
            ?>
        </div>
    </div>
    <main>
        <article>
            <div class="container">
                <!--Contacto-->
                <br><br>
                <section id="contacto">
                    <div class="row">
                        <div class="columns col-lg-12">
                            <h2 class="text-center title">Contacto</h2><br>
                            <h5 class="text-center">Nuestros datos de contacto</h5>
                        </div>
                        <div class="columns col-lg-6 col-sm-12">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3921.329724385439!2d-74.91496318469805!3d10.631472464758374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8ef5de3637e2113f%3A0x467580de37a6b117!2sCentro%20para%20el%20Desarrollo%20Agroecologico%20y%20Agroindustrial!5e0!3m2!1ses!2sco!4v1620162712304!5m2!1ses!2sco" width="100%" height="335" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            <table class="table table-dark table-striped">
                                <tbody>
                                    <tr>
                                        <th>Dirección</th>
                                        <td>Cl. 9 #19-120, Sabanalarga, Atlántico</td>
                                    </tr>
                                    <tr>
                                        <th>Teléfono</th>
                                        <td>3851285 extensión 52172</td>
                                    </tr>
                                    <tr>
                                        <th>Correo</th>
                                        <td><a href="mailto:info@astroenergy.com.co">info@astroenergy.com.co</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="columns col-lg-6 col-sm-12 table-responsive">
                            <form action="mailto:jbocane6@gmail.com" method="post" enctype="text/plain">
                                <table class="table table-dark">
                                    <tr>
                                        <th><label for="nombre">Nombre*</label></th>
                                        <td><input type="text" name="nombre" value="" placeholder="Nombre" style="width: 100%;" required></td>
                                    </tr>
                                    <tr>
                                        <th><label for="correo" class="me-2">Correo*</label></th>
                                        <td><input type="email" name="correo" value="" placeholder="Correo" style="width: 100%;" required></td>
                                    </tr>
                                    <tr>
                                        <th><label for="tel">Telefono*</label></th>
                                        <td><input type="tel" name="tel" value="" placeholder="Teléfono" style="width: 100%;" required></td>
                                    </tr>
                                    <tr>
                                        <th class="align-middle"><label for="mensaje" class="">Mensaje*</label></th>
                                        <td><textarea name="mensaje" rows="10" placeholder="Mensaje" style="width: 100%;" required></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" align="center">
                                            <div class="expanded button-group">
                                                <button type="reset" name="button" class="btn btn-secondary">Borrar</button>
                                                <button type="submit" name="button" class="btn btn-secondary">Enviar</button>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </section>
                <!--Termina Contacto-->
            </div>
        </article>
    </main>
    <!-- footer -->
    <footer>
        <div class="row">
            <div class="columns col-lg-3 col-sm-12">
                <ul class="list-inline">
                    <li class="list-inline-item ms-5">
                        <p>ASTROENERGY SAS 2021, Derechos Reservados.</p>
                    </li>
                </ul>
            </div>
            <div class="columns col-lg-3 col-sm-12">
                <ol class="list-inline">
                    <li class="list-inline-item"><a class="btn" data-bs-toggle="modal" data-bs-target="#terminos">Términos y Condiciones</a></li>
                    <li class="list-inline-item"><a class="btn" data-bs-toggle="modal" data-bs-target="#aviso">Aviso de Privacidad</a></li>
                </ol>
            </div>
            <div class="columns col-lg-3 col-sm-6">
                <ol class="list-inline">
                    <li class="list-inline-item"><a class="btn" href="https://facebook.com/Astroenergy-272506576464234/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="list-inline-item"><a class="btn" href="https://twitter.com/astroenergysas" target="_blank"><i class="fab fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a class="btn" href="https://www.instagram.com/astroenergysas/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a class="btn" href="https://api.whatsapp.com/send/?phone=573555555555&text=Gracias%20por%20contactar%20con%20Astroenergy%20SAS&app_absent=0" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                </ol>
            </div>
            <div class="columns col-lg-3 col-sm-6">
                <ul class="list-inline">
                    <li class="list-inline-item"><a class="btn" data-bs-toggle="modal" data-bs-target="#desarrolladores">Desarrolladores</a></li>
                </ul>
            </div>
        </div>
    </footer>
    <!-- Termina footer -->

    <!--Modals-->
    <div class="modal fade" id="terminos">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-white">
                    <h5 class="modal-title" id="exampleModalLabel">TERMINOS Y CONDICIONES</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-white">
                    <p>Todas las pasarelas de pago directo ofrecidas y utilizadas por nuestra compañía se adhieren a los estándares establecidos por PCI-DSS administrados por el PCI Security Standards Council, que es un esfuerzo conjunto de marcas como Visa, MasterCard, American Express y Discover. Los requisitos de PCI-DSS ayudan a garantizar el manejo seguro de la información de la tarjeta de crédito por parte de nuestra tienda y sus proveedores de servicios.
                    <p>&nbsp;</p>
                    Podemos comunicarnos contigo para notificarte sobre tu cuenta, para solucionar problemas con tu cuenta, resolver una disputa, cobrar tarifas o dinero adeudado, para sondear tus opiniones a través de encuestas o cuestionarios, para enviar actualizaciones sobre nuestra empresa, o cuando sea necesario para contactarte para hacer cumplir nuestro Acuerdo de usuario, las leyes nacionales aplicables y cualquier acuerdo que podamos tener contigo. A estos efectos, podemos comunicarnos contigo por correo electrónico, teléfono, mensajes de texto y correo postal.<p>&nbsp;</p>
                    Si no deseas que procesemos tus datos, contáctanos a info@astroenergy.com.co.<p>&nbsp;</p>
                    Nos reservamos el derecho de modificar esta política de privacidad en cualquier momento, por lo tanto, revísala con frecuencia. Los cambios y aclaraciones tendrán efecto inmediatamente después de su publicación en la página web. Si realizamos cambios sustanciales a esta política, te notificaremos que se ha actualizado, para que sepas qué información recopilamos, cómo la usamos y en qué circunstancias, si corresponde, usamos o divulgamos la información.<p>&nbsp;</p>
                    Si deseas: acceder, corregir, modificar o eliminar cualquier información personal que tengamos sobre ti, estás invitado a contactarnos en info@astroenergy.com.co</p>
                </div>
                <div class="modal-footer bg-white">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="aviso">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-white">
                    <h5 class="modal-title" id="exampleModalLabel">AVISO DE PRIVACIDAD</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-white">
                    <p>Recibimos, recopilamos y almacenamos cualquier información que ingrese en nuestro sitio web o nos proporciones de otra manera. Además, recogemos la dirección de protocolo de Internet (IP) utilizada para conectar tu computadora a Internet; datos de inicio de sesión, dirección de correo electrónico, contraseña, información de la computadora y la conexión y el historial de compras. Podemos usar herramientas de software para medir y recopilar información de la sesión, incluidos los tiempos de respuesta de la página, la duración de las visitas a determinadas páginas, la información de interacción de la página y los métodos utilizados para navegar fuera de la página. También recopilamos información de identificación personal (incluido nombres, correo electrónico, contraseña, comunicaciones), detalles de pago (incluida la información de la tarjeta de crédito), comentarios, sugerencias, reseñas de productos, recomendaciones y perfil personal. Cuando realizas una transacción en nuestra página web, como parte del proceso, recopilamos información personal que nos proporcionas, como tu nombre, dirección física y dirección de correo electrónico. Tu información personal será utilizada solo para los motivos específicos indicados anteriormente.</p>
                    <p>Recopilamos dicha información personal y no personal para los siguientes propósitos:</p>
                    <p>
                    <ol>
                        <li>Para proporcionar y operar los servicios;</li>
                        <li>Para proporcionar a nuestros usuarios asistencia continua al cliente y soporte
                            técnico;</li>
                        <li>Para poder contactar a nuestros visitantes y usuarios con avisos generales y
                            personalizados relacionados con el servicio y mensajes promocionales;</li>
                        <li>Para crear datos estadísticos agregados y otra información no personal agregada
                            o deducida, que nosotros o nuestros socios comerciales podamos utilizar para
                            proporcionar y mejorar nuestros servicios respectivos;</li>
                        <li>Para cumplir con las leyes y regulaciones aplicables.</li>
                    </ol>
                    </p>
                </div>
                <div class="modal-footer bg-white">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade centro" id="desarrolladores">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-white">
                    <h5 class="modal-title" id="exampleModalLabel">DESARROLLADORES</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-white">
                    <img src="./img/cedagro.jpg" width="100%" alt="cedagro">
                    <p align=center><b>TRABAJO DESARROLLADO COMO EVIDENCIA PARA EL PROGRAMA ANALISIS Y DESARROLLO DE SISTEMAS DE INFORMACIÓN DEL SENA<BR>POR BRAYAN STIVEN MAHECHA GALINDO<br>&<br>JUAN CAMILO BOCANEGRA OSORIO</BR>2021</b></p>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade centro" id="ingresa" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-white">
                    <h5 class="modal-title" id="exampleModalLabel">Registro o Ingreso</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-white">
                    <form action="clientes/passclientes.php" method="post">
                        <br>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" name="cedula" class="form-control" placeholder="cédula">

                        </div>
                        <br>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" name="passwd" class="form-control" placeholder="contraseña">
                        </div>
                        <br>
                        <div class="row align-items-center remember">
                            <input type="checkbox">Recuérdame
                        </div>
                        <input type="submit" value="Ingresa" class="btn float-end btn-dark mx-1">
                        <input type="button" value="Regístrate" class="btn float-end btn-dark" onclick="location='../clientes/registro.php'">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--Termina Modals-->

    <!--Javascript adicionales-->

    <!--Permite instalar popper-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

    <!--Permite instalar Bootstrap JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

    <!--Instala behavior.js, archivo con comportamientos javascript que se debe crear en la carpeta js dentro de la raiz del proyecto-->
    <script src="./js/behavior.js"></script>
</body>

</html>