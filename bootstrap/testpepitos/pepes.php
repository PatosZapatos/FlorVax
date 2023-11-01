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
          <li><a href="/php/florvax/tobi/forms/herramientasmejor.php"
              class="nav-link px-2 text-white fw-bold">Tienda</a></li>
          <li><a href="#" class="nav-link px-2 text-white fw-bold mx-4">Donaciones</a></li>
          <li><a href="/php/florvax/tobi/forms/nosotrosmejor.php" class="nav-link px-2 text-white fw-bold">Acerca de
              Nosotros</a></li>
        </ul>

        <a href="#"><img class="center-image d-block"
              src="/php/florvax/bootstrap/img/shoppingcart.png" width="30px" /></a>

        <div class="col text-end">

          <?php
          if (isset($_SESSION["userID"])) {

            $usuarioID = $_SESSION["userID"];

            $cadena = "SELECT * FROM usuario WHERE userID = '$usuarioID'";

            $consulta = mysqli_query($Conexion, $cadena);
            $registro = mysqli_fetch_row($consulta);

            echo '<div class="flex-shrink-0 dropdown">
            <a href="#" class="d-block link-body-emphasis text-decoration-none text-white dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">';
            if ($registro[4] != "") {
              echo "<img class= 'center-image' src='data:image/jpeg;base64," . base64_encode($registro[4]) . "' style='border-radius: 100%' width='32px'/>";
            } else {
              echo "<img class= 'center-image' src='/php/florvax/bootstrap/img/noProfile.jpg' style='border-radius: 100%' width='32px'/>";
            }

            echo '</a>
            <ul class="dropdown-menu dropdown-menu-end text-small shadow">
              <li><p class="dropdown-item">';

            if ($registro[4] != "") {
              echo "<img class= 'center-image' src='data:image/jpeg;base64," . base64_encode($registro[4]) . "' width='48px'/>";
            } else {
              echo "<img class= 'center-image' src='/php/florvax/bootstrap/img/noProfile.jpg' width='48px'/>";
            }

            echo ' ' . $_SESSION["username"] . '</a></li>
              <li><a class="dropdown-item" href="/php/florvax/bootstrap/register/pfp-choose.php">Cambiar Foto</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="/php/florvax/bootstrap/sign-in/logout.php">Cerrar Sesión</a></li>
            </ul>
          </div>';
          } else {
            echo '<a href="/php/florvax/bootstrap/sign-in/sign-in.php"><button type="button" class="btn text-white">Iniciar Sesión</button></a>
              <a href="/php/florvax/bootstrap/register/register.php"><button type="button" class="btn btn-outline-light">Registrate</button></a>';
          }
          ?>
        </div>
      </header>
    </div>
  </main>

  <script src="/php/florvax/bootstrap/js/bootstrap.bundle.js"></script>

</body>

</html>