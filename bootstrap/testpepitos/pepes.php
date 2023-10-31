<!doctype html>

<?php

session_start();

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
          <li><a href="#" class="nav-link px-2 text-white fw-bold">Tienda</a></li>
          <li><a href="#" class="nav-link px-2 text-white fw-bold mx-4">Donaciones</a></li>
          <li><a href="/php/florvax/tobi/forms/nosotrosmejor.php" class="nav-link px-2 text-white fw-bold">Acerca de
              Nosotros</a></li>
        </ul>

        <div class="col text-end">
          <?php
          if (isset($_SESSION["userID"])) {
            if (isset($_SESSION["userPFP"])) {
              $base = "florvax";
              $Conexion = mysqli_connect("localhost", "root", "", $base);

              $cadena = "SELECT * FROM persona";
              $consulta = mysqli_query($Conexion, $cadena);
              $registro = mysqli_fetch_row($consulta);

              echo "<img class= 'center-image' src='data:image/jpeg;base64," . base64_encode($registro[4]) . "' width='32px'/>";
            }
            echo '<a href="/php/florvax/bootstrap/register/pfp-choose.php"><button type="button" class="btn text-white">Cambiar Foto</button></a><a href="/php/florvax/bootstrap/sign-in/logout.php"><button type="button" class="btn text-white">Logout</button></a>';
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