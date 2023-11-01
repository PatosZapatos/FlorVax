<?php
// Este Include llama al Header, sin importar donde el Archivo actual se encuentre
include $_SERVER['DOCUMENT_ROOT'] . '/php/florvax/bootstrap/testpepitos/pepes.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Florvax</title>
    <link rel="stylesheet" href = "estilos.css" >
</head>

<body>
	<script src="//code.tidio.co/eegsgmgdkjt44bdavglkwjseoaecpepw.js" async></script>

        <div class="conteCarrousel">
            <div class="itemCarrousel" id="itemCarrousel-1">
                <div class="itemCarrouselTarjeta">
                    <img src="imagenes/3342137.png" alt="">
                </div>
                <div class="itemCarrouselArrows">
                    <a href="#itemCarrousel-3">
                        <i class="fas fa-chevron-left"></i>
                    </a>
                    <a href="#itemCarrousel-2">
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>
            <div class="itemCarrousel" id="itemCarrousel-2">
                <div class="itemCarrouselTarjeta">
                <img src="imagenes/3342137.png" alt="">
                </div>
                <div class="itemCarrouselArrows">
                    <a href="#itemCarrousel-1">
                        <i class="fas fa-chevron-left"></i>
                    </a>
                    <a href="#itemCarrousel-3">
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>
            <div class="itemCarrousel" id="itemCarrousel-3">
                <div class="itemCarrouselTarjeta">
                <img src="imagenes/3342137.png" alt="">
                </div>
                <div class="itemCarrouselArrows">
                    <a href="#itemCarrousel-2">
                        <i class="fas fa-chevron-left"></i>
                    </a>
                    <a href="#itemCarrousel-1">
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="conteCarrouselController">
            <a href="#itemCarrousel-1">•</a>
            <a href="#itemCarrousel-2">•</a>
            <a href="#itemCarrousel-3">•</a>
        </div>
    </div>
</body>

</html>