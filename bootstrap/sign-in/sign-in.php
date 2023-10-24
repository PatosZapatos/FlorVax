<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
  <script src="../assets/js/color-modes.js"></script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.112.5">
  <title>Iniciar Sesión</title>

  <link rel="icon" type="image/x-icon" href="../brand/logo_florvax.png">

  <link href="../css/bootstrap.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="sign-in.css" rel="stylesheet">
</head>

<body class="d-flex align-items-center"
  style="background: #00cca4; background-image: url('../img/Campo Fondo.png'); background-size: cover;">
  <main class="form-signin w-100 m-auto" style="background: #efece2; border-radius: 15% 5%;">
    <form method="POST" action="sign-in-process.php">
      <center>
        <a href="../../paginaprincipal/pag1.php"><img class="mb-1 logoFlorvax" src="../brand/logo_florvax.png" alt="" width="92"
            height="92"></a>
        <h1 class="h3 mb-3 fw-normal"> Ingresa tu cuenta </h1>
      </center>

      <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email"
          required>
        <label for="floatingInput">Correo electronico</label>
      </div>

      <div class="form-floating">
        <input type="password" class="form-control" id="passwordA" placeholder="Password" name="passw" required>
        <label for="floatingPassword">Contraseña</label>
        <i class="far fa-eye" id="togglePasswordA"></i>
      </div>

      <span id='login-alerts'></span>

      <div class="form-check text-start my-3">
        <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
          Recordar usuario
        </label>
      </div>
      <button class="btn btn-primary w-100 py-2 mb-2" type="submit">Entrar</button>
      <p class="mt mb-3 text-body-secondary"> ¿No tienes cuenta? <a href="../register/register.php">Registrate </a>
      </p>
      <center>
        <p class="mt-4 mb-3 text-body-secondary">&copy; 2023</p>
      </center>
    </form>
  </main>

  <script src="../js/bootstrap.bundle.js"></script>
  <script>
    const togglePasswordA = document.querySelector("#togglePasswordA");
    const passwordA = document.querySelector("#passwordA");

    togglePasswordA.addEventListener("click", function () {
      // toggle the type attribute
      const type = passwordA.getAttribute("type") === "password" ? "text" : "password";
      passwordA.setAttribute("type", type);

      // toggle the icon
      this.classList.toggle("bi-eye");
    });
  </script>

</body>

</html>