<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Florvax</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <div class="col-md-3 mb-2 mb-md-0">
            <a href="../../paginaprincipal/imagenes/logo_florvax.png" class="d-inline-flex link-body-emphasis text-decoration-none">
                <svg class="bi" width="40" height="32" role="img" aria-label="Bootstrap"></svg>
            </a>
        </div>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="#" class="nav-link px-2 link-secondary">Home</a></li>
            <li><a href="#" class="nav-link px-2">Features</a></li>
            <li><a href="#" class="nav-link px-2">FAQs</a></li>
            <li><a href="#" class="nav-link px-2">Pricing</a></li>
            <li><a href="#" class="nav-link px-2">About</a></li>
        </ul>

        <div class="col-md-3 text-end">
            <a type="button" href="../../bootstrap/sign-in/sign-in.html" class="btn btn-outline-primary me-2">Login</a>
            <a type="button" href="../../bootstrap/register/register.php" class="btn btn-primary">Sign-up</a>
        </div>
    </header>
    <section class="zona1"></section>
    <div>
        
    </div>
    <script type="text/javascript">
        window.addEventListener("scroll", function() {
            var header = document.querySelector("header");
            header.classList.toggle("abajo", window.scrollY > 0);
        })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <div class="bg-gray-100 xl:w-9/12 lg:w-8/12 hidden lg:block">
            <div class="py-6 px-20 border-b">
                <div class="flex">
                    <div class="flex flex-grow">
                        <div class="relative mr-4">
                            <img src="img/user-02.jpg" class="rounded-full w-12">
                            <div class="absolute bg-red-300 p-1 rounded-full bottom-0 right-0 border-2 border-gray-800"></div>
                        </div>
                        <div>
                            <p class="font-medium">Daniela López</p>
                            <small class="text-gray-500">Online</small>
                        </div>
                    </div>
                    <div class="flex">
                        <svg class="w-6 mr-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                        <svg class="w-6 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="py-6 px-20 h-3/4 overflow-auto">
                <div class="flex mb-12">
                    <img src="img/user-02.jpg" class="self-end rounded-full w-12 mr-4">
                    <div class="flex flex-col">
                        <div class="bg-white p-6 rounded-3xl rounded-bl-none w-96 shadow-sm mb-2">
                            <p class="font-medium mb-1">Daniela López</p>
                            <small class="inline-block text-gray-500 mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas dapibus a erat ac facilisis. Quisque in fringilla lorem.</small>
                        </div>
                        <small class="text-gray-500">09:55 am</small>
                    </div>
                </div>
                <div class="flex flex-row-reverse mb-12">
                    <img src="img/user-01.jpg" class="self-end rounded-full w-12 ml-4">
                    <div class="flex flex-col">
                        <div class="bg-blue-500 text-white p-6 rounded-3xl rounded-br-none w-96 mb-2">
                            <p class="font-medium mb-1">Diego Velázquez</p>
                            <small class="inline-block mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas dapibus a erat ac facilisis. Quisque in fringilla lorem.</small>
                        </div>
                        <small class="text-gray-500 self-end">09:55 am</small>
                    </div>
                </div>
                <div class="flex mb-12">
                    <img src="img/user-02.jpg" class="self-end rounded-full w-12 mr-4">
                    <div class="flex flex-col">
                        <div class="bg-white p-6 rounded-3xl rounded-bl-none w-96 shadow-sm mb-2">
                            <p class="font-medium mb-1">Daniela López</p>
                            <small class="inline-block text-gray-500 mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas dapibus a erat ac facilisis. Quisque in fringilla lorem.</small>
                        </div>
                        <small class="text-gray-500">09:55 am</small>
                    </div>
                </div>
                <div class="flex flex-row-reverse mb-12">
                    <img src="img/user-01.jpg" class="self-end rounded-full w-12 ml-4">
                    <div class="flex flex-col">
                        <div class="bg-blue-500 text-white p-6 rounded-3xl rounded-br-none w-96 mb-2">
                            <p class="font-medium mb-1">Diego Velázquez</p>
                            <small class="inline-block mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas dapibus a erat ac facilisis. Quisque in fringilla lorem.</small>
                        </div>
                        <small class="text-gray-500 self-end">09:55 am</small>
                    </div>
                </div>
            </div>
            <div class="flex py-6 px-20 border-t">
                <div class="w-4/5">
                    <input type="text" class="rounded-sm px-4 py-2 focus:outline-none bg-gray-100 w-full" placeholder="Escribe tu mensaje..."> 
                </div>
                <div class="w-1/5 flex justify-end">
                    <svg class="w-6 mr-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                    </svg>
                    <svg class="w-6 mr-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <a href="#" class="bg-blue-500 text-white rounded px-4 py-2">Enviar</a>
                </div>
            </div>
        </div>
    <body>
<?php

?>