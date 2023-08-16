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
  <title>FlorVax - Registrar</title>
  <link rel="icon" type="image/x-icon" href="/brand/logo_florvax.png">

  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">





  <link href="../css/bootstrap.css" rel="stylesheet">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .b-example-divider {
      width: 100%;
      height: 3rem;
      background-color: rgba(0, 0, 0, .1);
      border: solid rgba(0, 0, 0, .15);
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
    }

    .bi {
      vertical-align: -.125em;
      fill: currentColor;
    }

    .nav-scroller {
      position: relative;
      z-index: 2;
      height: 2.75rem;
      overflow-y: hidden;
    }

    .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;
      margin-top: -1px;
      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
    }

    .btn-bd-primary {
      --bd-violet-bg: #bf0092;
      --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

      --bs-btn-font-weight: 600;
      --bs-btn-color: var(--bs-white);
      --bs-btn-bg: var(--bd-violet-bg);
      --bs-btn-border-color: var(--bd-violet-bg);
      --bs-btn-hover-color: var(--bs-white);
      --bs-btn-hover-bg: #bf0092;
      --bs-btn-hover-border-color: #bf0092;
      --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
      --bs-btn-active-color: var(--bs-btn-hover-color);
      --bs-btn-active-bg: #bf0092;
      --bs-btn-active-border-color: #bf0092;
    }

    .bd-mode-toggle {
      z-index: 1500;
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="register.css" rel="stylesheet">
</head>

<body class="d-flex align-items-center py-4 bg-body-tertiary">
  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="check2" viewBox="0 0 16 16">
      <path
        d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
    </symbol>
    <symbol id="circle-half" viewBox="0 0 16 16">
      <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
    </symbol>
    <symbol id="moon-stars-fill" viewBox="0 0 16 16">
      <path
        d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
      <path
        d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
    </symbol>
    <symbol id="sun-fill" viewBox="0 0 16 16">
      <path
        d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
    </symbol>
  </svg>




  <main class="form-signin w-100 m-auto">
    <form method="POST" action="register-process.php">
      <center>
        <img class="mb-1" src="../brand/logo_florvax.png" alt="" width="92" height="92">
        <h1 class="h3 mb-3 fw-normal"> Crea tu Cuenta </h1>
      </center>
      <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" required>
        <label for="floatingInput">Correo electronico</label>
      </div>
      <div class="form-floating">
        <input type="name" class="form-control" id="floatingInput" placeholder="Usuario" name="username" required>
        <label for="floatingInput">Nombre de Usuario</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="password1" placeholder="Password" name="passw" required>
        <label for="floatingPassword">Contraseña</label>
        <i class="far fa-eye" id="togglePassword1"></i>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="password2" placeholder="Password" onkeyup="validate_password()"
          required>
        <label for="floatingPassword">Confirmar Contraseña</label>
        <i class="far fa-eye" id="togglePassword2"></i>
      </div>

      <span id="wrong_pass_alert"></span>

      <div class="form-check text-start my-3">
        <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault" required>
        <label class="form-check-label" for="flexCheckDefault">
          Acepto los Terminos y Condiciones
        </label>
      </div>
      <button class="btn btn-primary w-100 py-2 mb-2" type="submit" id="create" disabled>Registrar</button>
      <p class="text-body-secondary">¿Ya tienes cuenta? <a href="../sign-in/sign-in.html">Inicia sesión</a></p>
      <center>
        <p class="mt-5 mb-3 text-body-secondary">&copy; 2023</p>
      </center>
    </form>
  </main>
  <script src="../js/bootstrap.bundle.js"></script>

  <script>
    function validate_password() {

      var pass = document.getElementById('password1').value;
      var confirm_pass = document.getElementById('password2').value;
      if (pass != confirm_pass) {
        document.getElementById('wrong_pass_alert').style.color = 'red';
        document.getElementById('wrong_pass_alert').innerHTML
          = '☒ Las contraseñas deben coincidir.';
        document.getElementById('create').disabled = true;
        document.getElementById('create').style.opacity = (0.4);
      } else {
        document.getElementById('wrong_pass_alert').style.color = 'green';
        document.getElementById('wrong_pass_alert').innerHTML =
          '🗹 Las contraseñas coinciden.';
        document.getElementById('create').disabled = false;
        document.getElementById('create').style.opacity = (1);
      }
    }

    function wrong_pass_alert() {
      if (document.getElementById('password1').value != "" &&
        document.getElementById('confirm_pass').value != "") {
        alert("Your response is submitted");
      } else {
        alert("Please fill all the fields");
      }
    }

  </script>

  <script>
    const togglePassword1 = document.querySelector("#togglePassword1");
    const togglePassword2 = document.querySelector("#togglePassword2");
    const password1 = document.querySelector("#password1");
    const password2 = document.querySelector("#password2");

    togglePassword1.addEventListener("click", function () {
      // toggle the type attribute
      const type = password1.getAttribute("type") === "password" ? "text" : "password";
      password1.setAttribute("type", type);

      // toggle the icon
      this.classList.toggle("bi-eye");
    });

    togglePassword2.addEventListener("click", function () {
      // toggle the type attribute
      const type = password2.getAttribute("type") === "password" ? "text" : "password";
      password2.setAttribute("type", type);

      // toggle the icon
      this.classList.toggle("bi-eye");
    });
  </script>


</body>

</html>