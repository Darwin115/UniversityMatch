<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ITA || UniversityMatch</title>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
  <link rel="stylesheet" type="text/css" href="../../Estilos/style.css">
  <link rel="stylesheet" type="text/css" href="../../Estilos/stylevistaproductos.css">
  <link rel="stylesheet" type="text/css" href="../../Estilos/FooterStyle.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-GDWlJng9xEwG1eYTTvWe4H9fA1Idb51fbrYw5YK51m6JzCj5lCR4gI6Rbmu1nCrXOjW1QrR7TjDXXESmtv5D5Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-4LTLCWXEBE"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-4LTLCWXEBE');
  </script>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .slick-slide img {
            display: block;
            margin: 0 auto;
            height: 518px;
            width: auto; 
        }
        .slick-prev:before, .slick-next:before {
            color: black; 
        }
        .slick-dots li button:before {
            font-size: 12px;
            color: blue; 
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
<body onload="iniciarLectura()">
  <?php include '../../Header.php'; ?>
  <?php include 'HeaderITA.php'; ?>
    
  
<section class="carrusel" id="aulas">
    <h2>Edificios</h2>
    <div class="slick-slider">
        <div><img src="../../img/uniPics/ITA/Galeria/Ext2.webp" alt="Edificio 2"></div>
        <div><img src="../../img/uniPics/ITA/Galeria/Ext3.jpg" alt="Edificio 3"></div>
        <div><img src="../../img/uniPics/ITA/Galeria/Ext4.jpg" alt="Edificio 4"></div>
        <div><img src="../../img/uniPics/ITA/Galeria/Ext5.jpg" alt="Edificio 5"></div>
        <div><img src="../../img/uniPics/ITA/Galeria/Ext6.jpg" alt="Edificio 6"></div>
        <div><img src="../../img/uniPics/ITA/Galeria/Ext7.jpg" alt="Edificio 7"></div>
        <div><img src="../../img/uniPics/ITA/Galeria/Ext8.jpg" alt="Edificio 8"></div>
        <div><img src="../../img/uniPics/ITA/Galeria/Ext9.jpg" alt="Edificio 9"></div>
        <div><img src="../../img/uniPics/ITA/Galeria/Ext11.jpg" alt="Edificio 10"></div>
        <div><img src="../../img/uniPics/ITA/Galeria/Ext12.jpg" alt="Edificio 11"></div>
        <div><img src="../../img/uniPics/ITA/Galeria/Ext13.jpg" alt="Edificio 12"></div>
        <div><img src="../../img/uniPics/ITA/Galeria/Ext14.jpg" alt="Edificio 13"></div>
        <div><img src="../../img/uniPics/ITA/Galeria/Ext15.jpg" alt="Edificio 14"></div>
        <div><img src="../../img/uniPics/ITA/Galeria/Ext16.jpg" alt="Edificio 15"></div>
        <div><img src="../../img/uniPics/ITA/Galeria/Ext17.jpg" alt="Edificio 16"></div>
    </div>
</section>

<section class="carrusel" id="laboratorios">
    <h2>Laboratorios</h2>
    <div class="slick-slider">
        <div><img src="../../img/uniPics/ITA/Galeria/Laboratorios1.jpg" alt="Laboratorio 1"></div>
        <div><img src="../../img/uniPics/ITA/Galeria/Laboratorios2.jpg" alt="Laboratorio 2"></div>
        <div><img src="../../img/uniPics/ITA/Galeria/Laboratorios4.jpg" alt="Laboratorio 4"></div>
        <div><img src="../../img/uniPics/ITA/Galeria/Laboratorios5.jpg" alt="Laboratorio 5"></div>
        <div><img src="../../img/uniPics/ITA/Galeria/Laboratorios6.jpg" alt="Laboratorio 6"></div>
    </div>
</section>

<section class="carrusel" id="auditorio">
    <h2>Auditorio</h2>
    <div class="slick-slider">
        <div><img src="../../img/uniPics/ITA/Galeria/Auditorio1.jpg" alt="Auditorio 1"></div>
        <div><img src="../../img/uniPics/ITA/Galeria/Auditorio2.jpg" alt="Auditorio 2"></div>
        <div><img src="../../img/uniPics/ITA/Galeria/Auditorio3.jpg" alt="Auditorio 3"></div>
    </div>
</section>

<section class="carrusel" id="premios">
    <h2>Premios</h2>
    <div class="slick-slider">
        <div><img src="../../img/uniPics/ITA/Galeria/Premios1.jpg" alt="Premio 1"></div>
        <div><img src="../../img/uniPics/ITA/Galeria/Premios2.jpg" alt="Premio 2"></div>
        <div><img src="../../img/uniPics/ITA/Galeria/Premios3.jpg" alt="Premio 3"></div>
        <div><img src="../../img/uniPics/ITA/Galeria/Premios4.jpg" alt="Premio 4"></div>
    </div>
</section>

<section class="carrusel" id="areas-deportivas">
    <h2>Áreas Deportivas</h2>
    <div class="slick-slider">
        <div><img src="../../img/uniPics/ITA/Galeria/Adepo1.jpg" alt="Área Deportiva 1"></div>
        <div><img src="../../img/uniPics/ITA/Galeria/Adepo2.jpg" alt="Área Deportiva 2"></div>
        <div><img src="../../img/uniPics/ITA/Galeria/Adepo3.jpg" alt="Área Deportiva 3"></div>
        <div><img src="../../img/uniPics/ITA/Galeria/Adepo4.jpg" alt="Área Deportiva 4"></div>
        <div><img src="../../img/uniPics/ITA/Galeria/Adepo5.jpg" alt="Área Deportiva 5"></div>
        <div><img src="../../img/uniPics/ITA/Galeria/Adepo6.jpg" alt="Área Deportiva 6"></div>
        <div><img src="../../img/uniPics/ITA/Galeria/Adepo7.jpg" alt="Área Deportiva 7"></div>
        <div><img src="../../img/uniPics/ITA/Galeria/Adepo8.jpg" alt="Área Deportiva 8"></div>
    </div>
</section>

<section class="carrusel" id="areas-verdes">
    <h2>Áreas Verdes</h2>
    <div class="slick-slider">
        <div><img src="../../img/uniPics/ITA/Galeria/AreasV1.webp" alt="Área Verde 1"></div>
        <div><img src="../../img/uniPics/ITA/Galeria/AreasV2.jpg" alt="Área Verde 2"></div>
        <div><img src="../../img/uniPics/ITA/Galeria/AreasV3.jpg" alt="Área Verde 3"></div>
        <div><img src="../../img/uniPics/ITA/Galeria/AreasV4.webp" alt="Área Verde 4"></div>
        <div><img src="../../img/uniPics/ITA/Galeria/AreasV5.jpg" alt="Área Verde 5"></div>
        <div><img src="../../img/uniPics/ITA/Galeria/AreasV6.jpg" alt="Área Verde 6"></div>
        <div><img src="../../img/uniPics/ITA/Galeria/AreasV7.jpg" alt="Área Verde 7"></div>
        <div><img src="../../img/uniPics/ITA/Galeria/AreasV8.jpg" alt="Área Verde 8"></div>
        <div><img src="../../img/uniPics/ITA/Galeria/AreasV9.jpg" alt="Área Verde 9"></div>
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

</body>
</html>
