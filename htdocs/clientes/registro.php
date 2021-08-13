<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Permite instalar Bootstrap CSS desde un servidor-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/styles_2.css">

    <!-- Fonts Google -->
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <title>REGISTRO</title>
</head>

<body>
    <?php
        include "../header.php"
    ?>
    <!-- Inicia barra navegación -->
    <div class="navbar-expand-md navbar-dark bg-dark sticky-top">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 nav">
                <li class="nav-item">
                    <a class="btn pt-2" aria-current="page" href="../index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="btn pt-2" aria-current="page" href="../tienda.php">Tienda</a>
                </li>
                <li class="nav-item">
                    <a class="btn pt-2" aria-current="page" href="../noticias.php">Noticias</a>
                </li>
                <li class="nav-item me-5">
                    <a class="btn pt-2" aria-current="page" href="#contacto">Contacto</a>
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
                <br><br>
                <h2 class="text-center title">REGISTRO</h2>
                <br>
                <div class="mx-auto" style="width: 400px;">
                    <form action="regclientes.php" method="post">
                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user-tie"></i></span>
                            </div>
                            <input type="text" name="usuario" class="form-control" placeholder="Nombre de usuario" required>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                            </div>
                            <input type="text" name="id" class="form-control" placeholder="Identificación" required>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" name="nombre" class="form-control" placeholder="Nombre" required>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-map-marked-alt"></i></span>
                            </div>
                            <input type="text" name="direccion" class="form-control" placeholder="Dirección" required>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-phone-square-alt"></i></span>
                            </div>
                            <input type="text" name="telefono" class="form-control" placeholder="Teléfono" required>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-globe-americas"></i></span>
                            </div>
                            <input type="text" name="pais" class="form-control" placeholder="Pais" required>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-city"></i></span>
                            </div>
                            <input type="text" name="ciudad" class="form-control" placeholder="Ciudad" required>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" name="passwd" class="form-control" placeholder="Contraseña" required>
                        </div>
                        <br>
                        <div class="form-group row justify-content-center">
                            <input type="submit" value="Crear usuario" class="btn float-end login_btn">
                        </div>
                    </form>
                </div>
                <br>
                <?php
                    include "../contacto.php"
                ?>
            </div>
        </article>
    </main>
    <?php
        include "../footer.php";
        include "../modals.php"
    ?>
    <!--Javascript adicionales-->

    <!--Permite instalar popper-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

    <!--Permite instalar Bootstrap JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>

</html>