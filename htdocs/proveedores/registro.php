<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!--Permite instalar Bootstrap CSS desde un servidor-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

  <link rel="stylesheet" href="../css/style.css">

  <!-- Fonts Google -->
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

  <title>REGISTRO PROVEEDOR</title>
</head>

<body>
  <!-- Inicia barra navegación -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Clientes</a>
            <ul class="dropdown-menu bg-info" aria-labelledby="navbarScrollingDropdown">
              <li><a class="dropdown-item" href="../clientes/clientes.php">Listar y Actualizar</a></li>
              <li><a class="dropdown-item" href="../clientes/listclientes.php">Eliminar</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Empleados</a>
            <ul class="dropdown-menu bg-info" aria-labelledby="navbarScrollingDropdown">
              <li><a class="dropdown-item" href="../empleados/registro.php">Registrar</a></li>
              <li><a class="dropdown-item" href="../empleados/empleados.php">Listar y Actualizar</a></li>
              <li><a class="dropdown-item" href="../empleados/listempleados.php">Eliminar</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Proveedores</a>
            <ul class="dropdown-menu bg-info" aria-labelledby="navbarScrollingDropdown">
              <li><a class="dropdown-item" href="../proveedores/proveedores.php">Listar y Actualizar</a></li>
              <li><a class="dropdown-item" href="../proveedores/listprov.php">Eliminar</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Productos</a>
            <ul class="dropdown-menu bg-info" aria-labelledby="navbarScrollingDropdown">
              <li><a class="dropdown-item" href="../productos/regproductos.php">Registrar</a></li>
              <li><a class="dropdown-item" href="../productos/productos.php">Listar y Actualizar</a></li>
              <li><a class="dropdown-item" href="../productos/listprod.php">Eliminar</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Termina barra navegación -->
  <div class="container bg-transparent" id="contenedor">
    <div class="d-flex justify-content-center h-75">
      <div class="card bg-transparent border-0">
        <div class="card-header">
          <br>
          <h3 class="bg-dark" align=center>REGISTRO PROVEEDORES</h3>
          <div class="d-flex justify-content-end logo_icon">
            <span><img src="../img/logo.png" alt=""></i></span>
          </div>
        </div>
        <div class="card-body">
          <form action="regproveedores.php" method="post">
            <div class="input-group input-group-sm mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-id-card"></i></span>
              </div>
              <input type="text" name="id" class="form-control" placeholder="NIT" required>
            </div>
            <div class="input-group input-group-sm mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
              </div>
              <input type="text" name="nombre" class="form-control" placeholder="Razón Social" required>
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
                <span class="input-group-text"><i class="fas fa-city"></i></span>
              </div>
              <input type="text" name="ciudad" class="form-control" placeholder="Ciudad" required>
            </div>
            <div class="input-group input-group-sm mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-globe-americas"></i></span>
              </div>
              <input type="text" name="pais" class="form-control" placeholder="Pais" required>
            </div>

            <br>
            <div class="form-group row justify-content-center w-100">
              <input type="submit" value="Crear" class="btn float-end login_btn">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!--Javascript adicionales-->

  <!--Permite instalar popper-->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

  <!--Permite instalar Bootstrap JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>

</html>