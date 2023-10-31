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
    <title>Foto de Perfil</title>

    <link rel="icon" type="image/x-icon" href="../brand/logo_florvax.png">

    <link href="../css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="pfp-choose.css" rel="stylesheet">
</head>

<body class="d-flex align-items-center"
    style="background: #00cca4; background-image: url('../img/Campo Fondo.png'); background-size: cover;">
    <main class="form-signin w-100 m-auto" style="background: #efece2; border-radius: 15% 5%;">
        <form method="POST" action="pfp-process.php" enctype="multipart/form-data">
            <center>
                <h1 class="h3 mb-3 fw-normal">Nueva Foto</h1>
            </center>

            <div class="mb-3">
                <label for="foto" class="form-label">Foto de Perfil</label>
                <input type="file" name="foto" class="form-control" required>
            </div>

            <span id='login-alerts'></span>

            <div class="text-start my-3">
                <button class="btn btn-primary w-100 py-2 mb-2" type="submit">Enviar</button>
            </div>
        </form>
    </main>

</body>

</html>