<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UniversityMatch || Inicio</title>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
  <link rel="stylesheet" href="Estilos/style.css">
  <link rel="stylesheet" href="Estilos/Universidades.css">
  <link rel="stylesheet" href="Estilos/FooterStyle.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick-theme.css" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <script src="./scriptnav.js"></script>


  <style>
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

<body onload="iniciarLectura(), abrirAcce()">
<?php include 'Header.php'; ?>

  <!--Banners-->
  <section id="container-slider">
    <a href="javascript: funcionEjecutar('anterior');" class="arrowPrev"><i class="fas fa-chevron-circle-left"></i></a>
    <a href="javascript: funcionEjecutar('siguiente');" class="arrowNext"><i
        class="fas fa-chevron-circle-right"></i></a>
    <ul class="listslider">
      <li><a itlist="itList_0" href="" class="item-select-slid"></a></li>
      <li><a itlist="itList_1" href=""></a></li>
      <li><a itlist="itList_2" href=""></a></li>
    </ul>
    <ul id="slider">
      <li style="background-image: url('img/Banners/ita.jpg'); z-index:0; opacity: 1;">
        <div class="content_slider">
          <div class="banner-titulo">
            <h2>¿Buscas alguna ingeniería?</h2>

            <a href="vistas/Vista_ITA.html" target="_blank" class="btnSlider">
              <div class="conoce" style="display: flex; align-items: center;">
                <p style="margin: 0;">CONOCE MÁS</p><span class="material-symbols-outlined">
                  arrow_right
                </span>
              </div>
            </a>
          </div>
        </div>
      </li>
      <li style="background-image: url('img/Banners/UPA.jpg'); ">
        <div class="content_slider">
          <div class="banner-titulo">
            <h2>¿Buscas alguna ingeniería?</h2>

            <a href="vistas/Vista_ITA.html" target="_blank" class="btnSlider">
              <div class="conoce" style="display: flex; align-items: center;">
                <p style="margin: 0;">CONOCE MÁS</p><span class="material-symbols-outlined">
                  arrow_right
                </span>
              </div>
            </a>
          </div>
        </div>
      </li>
      <li style="background-image: url('img/Banners/uvm.jpg'); ">
        <div class="content_slider">
          <div class="banner-titulo">
            <h2>Estudia con mirada profesional</h2>

            <a href="vistas/Vista_ITA.html" target="_blank" class="btnSlider">
              <div class="conoce" style="display: flex; align-items: center;">
                <p style="margin: 0;">CONOCE MÁS</p><span class="material-symbols-outlined">
                  arrow_right
                </span>
              </div>
            </a>
          </div>
        </div>
      </li>
    </ul>
  </section>

  <!--Universidades Recomendadas-->

  <div id="recomendadas" class="row"></div>

  <!--Universidades Destacadas-->
  <div id="destacadas" class="row"></div>

  <!--Agregamos un carrusel, en el cual, mostraremos el logo de las diferentes marcas que manejamos;
    mismas que estarán referenciadas al ctálogo de productos-->
  <section id="carrusel" class="section-p1">
    <div class="carousel-unis-container">
      <div class="carousel-marcas">
        <a href="" title="Dell"><img src="img/uniLogos/ITA.png" alt="Dell" title="DELL"></a>
        <a href="" title="HP"><img src="img/uniLogos/UPA.jpg" alt="HP" title="HP"></a>
        <a href="" title="Acer"><img src="img/uniLogos/UTA.jpg" alt="Acer" title="ACER"></a>
        <a href="" title="Lenovo"><img src="img/uniLogos/UAA.jpg" alt="Lenovo" title="LENOVO"></a>
      </div>
    </div>
  </section>

  <!--<Pie de la página.-->
  <?php include 'Footer.php'; ?>
  <!--Fin pie de la página.-->

  <div class="accessibility" title="Accesibilidad" id="accessibility" onclick="abrirAcce()">
    <img src="img/utileria/accessibility.png" alt="">

  </div>
  <div class="BoxAccesibility" id="BoxAccesibility">
    <p>Lector de texto</p>
    <div class="centrado">
      <button class="buttonLec" onclick="reiniciarLectura()"><i class="fas fa-play"></i> </button>
      <button class="buttonLec" onclick="toggleSpeech()"><i class="fas fa-stop"></i> </button>
    </div>
  </div>



  <script src="Universidades.js"></script>

  <script>
    var speechSynthesisInstance;
    var textoUniversidad = "Bienvenidos y bienvenidas a 'university match'. Continúa tus estudios, Existe una universidad ideal para tí!. Realiza tu test vocacional y comencemos a descubrir cuál es.";

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

  <script src="banners.js"></script>
  <script src="script.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.min.js"></script>
  <script src="script.js"></script>
</body>

</html>