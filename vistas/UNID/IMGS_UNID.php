<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>IMGS_UNID || UniMatch</title>
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
    .buttonLec {
      background-color: #ffffff;
      color: #246d96;
      border: none;
      /* Eliminar borde */
      width: 35px;
      height: 35px;
      /* Espaciado interno */
      cursor: pointer;
      /* Cursor al pasar sobre el botón */
      border-radius: 100px;
      /* Borde redondeado */
      font-size: 12px;
      /* Tamaño del texto */

    }

    .buttonLec:hover {
      background-color: #ebebebf6;
      /* Cambio de color al pasar sobre el botón */
    }
  </style>
</head>
<body>
    <?php include '../../Header.php'; ?>

<section class="carrusel" id="aulas">
    <h2>Aulas</h2>
    <div class="slick-slider">
        <div><img src="../../img/uniPics/UNID/UNID2.jpg" alt="Aula 1"></div>
        <div><img src="../../img/uniPics/UNID/UNID3.jpg" alt="Aula 2"></div>
        <div><img src="../../img/uniPics/UNID/UNID1.jpg" alt="Aula 3"></div>
    </div>
</section>

<section class="carrusel" id="laboratorios">
    <h2>Laboratorios</h2>
    <div class="slick-slider">
        <div><img src="../../img/uniPics/UNID/UNID1.jpg" alt="Laboratorio 1"></div>
        <div><img src="../../img/uniPics/UNID/UNID2.jpg" alt="Laboratorio 2"></div>
        <div><img src="../../img/uniPics/UNID/UNID3.jpg" alt="Laboratorio 3"></div>
    </div>
</section>

<section class="carrusel" id="areas-deportivas">
    <h2>Áreas Deportivas</h2>
    <div class="slick-slider">
        <div><img src="../../img/uniPics/UNID/UNID3.jpg" alt="Área Deportiva 1"></div>
        <div><img src="../../img/uniPics/UNID/UNID1.jpg" alt="Área Deportiva 2"></div>
        <div><img src="../../img/uniPics/UNID/UNID2.jpg" alt="Área Deportiva 3"></div>
    </div>
</section>

    <!--<Pie de la página.-->
    <?php include '../../Footer.php'; ?>
    <!--Fin pie de la página.-->

    <!--<Accesibilidad-->
  <div class="accessibility" title="Accesibilidad" id="accessibility" onclick="abrirAcce()">
    <img src="../../img/utileria/accessibility.png" alt="">

  </div>
  <div class="BoxAccesibility" id="BoxAccesibility">
    <p>Lector de texto</p>
    <div class="centrado">
      <button class="buttonLec" onclick="reiniciarLectura()"><i class="fas fa-play"></i> </button>
      <button class="buttonLec" onclick="toggleSpeech()"><i class="fas fa-stop"></i> </button>
    </div>
  </div>
    
  <script>
  var speechSynthesisInstance;
  var textoUniversidad = "Este es el catálogo de universidades, aquí podrás encontrar todas las universidades que ofrecen la carrera ideal para tí. Para ello, puedes utilizar el filtrado por categoría para revisar solo las universidades de tu interés o bien, si ya tienes claro a qué institución vas a entrar y deseas conocer más sobre ella, puedes utilizar el buscador";
  function iniciarLectura() {
    if ('speechSynthesis' in window) {
      speechSynthesisInstance = new SpeechSynthesisUtterance(textoUniversidad);
      window.speechSynthesis.speak(speechSynthesisInstance);
    } else {
      console.log('Tu navegador no soporta la síntesis de voz.');
    }
  }
  function pausarLectura() {
    if (speechSynthesisInstance) {
      window.speechSynthesis.pause();
    }
  }
  function continuarLectura() {
    if (speechSynthesisInstance) {
      window.speechSynthesis.resume();
    }
  }
  function reiniciarLectura() {
    if (speechSynthesisInstance) {
      window.speechSynthesis.cancel();
      iniciarLectura();
    }
  }
  function toggleSpeech() {
    if (speechSynthesisInstance && window.speechSynthesis.speaking) {
      pausarLectura();
    } else {
      continuarLectura();
    }
  }
  </script>
  <!--<Fin accesibilidad-->

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
