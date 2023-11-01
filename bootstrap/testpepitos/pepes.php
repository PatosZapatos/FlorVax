<!doctype html>

<?php

if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

$base = "florvax";
$Conexion = mysqli_connect("localhost", "root", "", $base);

?>

<head>
  <link href="/php/florvax/bootstrap/css/bootstrap.css" rel="stylesheet">
</head>

<body>
  <main>
    <div class="sticky-top container-fluid" style="background-color: #81D7CD;">
      <header class="navbar navbar-expand navbar-dark flex-column flex-md-row bd-navbar">
        <div class="col">
          <a href="/php/florvax/paginaprincipal/index.php">
            <img src="/php/florvax/bootstrap/brand/florvax_banner.svg" alt="mdo" width="180" height="45">
          </a>
        </div>

        <ul class="nav col mb-2 justify-content-center mb-md-0">
          <li><a href="/php/florvax/tobi/forms/herramientasmejor.php" class="nav-link px-2 text-white fw-bold">Tienda</a></li>
          <li><a href="#" class="nav-link px-2 text-white fw-bold mx-4">Donaciones</a></li>
          <li><a href="/php/florvax/tobi/forms/nosotrosmejor.php" class="nav-link px-2 text-white fw-bold">Acerca de
              Nosotros</a></li>
        </ul>

        <div class="col text-end">
          <?php
          if (isset($_SESSION["userID"])) {

            $usuarioID = $_SESSION["userID"];

            $cadena = "SELECT * FROM usuario WHERE userID = '$usuarioID'";

            $consulta = mysqli_query($Conexion, $cadena);
            $registro = mysqli_fetch_row($consulta);

            if ($registro[4] != "") {
              echo "<img class= 'center-image' src='data:image/jpeg;base64," . base64_encode($registro[4]) . "' width='32px'/>";
            } else {
              echo "<img class= 'center-image' src='/php/florvax/bootstrap/img/noProfile.jpg' style='border-radius: 100%' width='32px'/>";
            }
            echo '<a href="/php/florvax/bootstrap/register/pfp-choose.php"><button type="button" class="btn text-white">Cambiar Foto</button></a><a href="/php/florvax/bootstrap/sign-in/logout.php"><button type="button" class="btn text-white">Logout</button></a>';
          } else {
            echo '<a href="/php/florvax/bootstrap/sign-in/sign-in.php"><button type="button" class="btn text-white">Iniciar Sesión</button></a>
              <a href="/php/florvax/bootstrap/register/register.php"><button type="button" class="btn btn-outline-light">Registrate</button></a>';
          }
          ?>
        </div>
        <div class="flex-shrink-0 dropdown">
          <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
          </a>
          <ul class="dropdown-menu text-small shadow">
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Sign out</a></li>
          </ul>
        </div>
      </header>
    </div>
  </main>

  <script src="/php/florvax/bootstrap/js/bootstrap.bundle.js"></script>

</body>

</html>