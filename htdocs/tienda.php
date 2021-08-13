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
            <br>
            <div class="container">
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

    <!--Instala behavior.js, archivo con comportamientos javascript que se debe crear en la carpeta js dentro de la raiz del proyecto-->
    <script src="./js/behavior.js"></script>
</body>

</html>