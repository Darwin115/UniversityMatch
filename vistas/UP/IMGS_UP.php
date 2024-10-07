<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>IMGS_ITA || UniversityMatch</title>
    <link rel="stylesheet" type="text/css" href="../../Estilos/style.css">
    <link rel="stylesheet" type="text/css" href="../../Estilos/stylevistaproductos.css">
    <link rel="stylesheet" type="text/css" href="../../Estilos/FooterStyle.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css"/>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .slick-slide img {
            display: block;
            margin: auto;
        }
        .slick-prev:before, .slick-next:before {
            color: black; /* Asegúrate de que este color sea visible en tu fondo */
        }
        .slick-dots li button:before {
            font-size: 12px;
            color: blue; /* Asegúrate de que este color sea visible en tu fondo */
        }
        .carrusel h2 {
            text-align: center;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <?php include '../../Header.php'; ?>

<section class="carrusel" id="aulas">
    <h2>Aulas</h2>
    <div class="slick-slider">
        <div><img src="../../img/uniPics/UP/UP2.jpg" alt="Aula 1"></div>
        <div><img src="../../img/uniPics/UP/UP3.jpg" alt="Aula 2"></div>
        <div><img src="../../img/uniPics/UP/UP1.jpg" alt="Aula 3"></div>
    </div>
</section>

<section class="carrusel" id="laboratorios">
    <h2>Laboratorios</h2>
    <div class="slick-slider">
        <div><img src="../../img/uniPics/UP/UP1.jpg" alt="Laboratorio 1"></div>
        <div><img src="../../img/uniPics/UP/UP2.jpg" alt="Laboratorio 2"></div>
        <div><img src="../../img/uniPics/UP/UP3.jpg" alt="Laboratorio 3"></div>
    </div>
</section>

<section class="carrusel" id="areas-deportivas">
    <h2>Áreas Deportivas</h2>
    <div class="slick-slider">
        <div><img src="../../img/uniPics/UP/UP3.jpg" alt="Área Deportiva 1"></div>
        <div><img src="../../img/uniPics/UP/UP1.jpg" alt="Área Deportiva 2"></div>
        <div><img src="../../img/uniPics/UP/UP2.jpg" alt="Área Deportiva 3"></div>
    </div>
</section>

    <!--<Pie de la página.-->
    <?php include '../../Footer.php'; ?>
    <!--Fin pie de la página.-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script>
    $(document).ready(function() {
        // Inicializa cada carrusel de forma independiente
        $('.slick-slider').each(function() {
            $(this).slick({
                dots: true,
                infinite: true,
                speed: 300,
                slidesToShow: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                adaptiveHeight: true,
                pauseOnFocus: false, // Asegura que el carrusel no se pause con el foco
                pauseOnHover: false, // Asegura que el carrusel no se pause al pasar el mouse
                focusOnSelect: false // Asegura que no se cambie el enfoque al seleccionar
            });
        });

        // Refrescar Slick en cambio de tamaño de ventana
        $(window).resize(function() {
            $('.slick-slider').slick('setPosition');
        });
    });
</script>

</body>
</html>
