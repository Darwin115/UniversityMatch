<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donaciones</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="../Estilos/style.css">
    <link rel="stylesheet" href="./Donaciones.css">
    <link rel="stylesheet" href="../Estilos/FooterStyle.css">
    <link rel="stylesheet" href="../Estilos/TestStyle.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick-theme.css" />
    <script src="./scriptnav.js"></script>
</head>

<body onload="iniciarLectura(), abrirAcce()">
<?php include '../header.php'; ?>

  <div class="container">
    <h2 class="titulo">Unidos por la Educación: Da y Recibe para un Futuro Brillante</h2>
    <p class="text-center">Selecciona una opción para proceder con la solicitud o la oferta de donación.</p>

    <div class="row">
      <!-- Requiero una Donación -->
      <div class="col-md-4 text-center producto">
          <a href="BuscarDonacion.php" class="card-link">
              <div class="card">
                  <div class="card-content text-center">
                      <h3 class="nombre">Requiero una Donación</h3>
                      <p class="descripcion">¿Necesitas recursos o materiales para continuar con tus 
                          estudios o proyectos? En esta sección, puedes solicitar donaciones de bienes como 
                          libros, material escolar, equipos tecnológicos y otros recursos esenciales. Nuestro 
                          objetivo es ayudarte a acceder a los elementos que necesitas para alcanzar tus metas 
                          académicas y profesionales. Completa el formulario y te conectaremos con quienes están 
                          dispuestos a ofrecer lo que necesitas para avanzar en tu educación y desarrollo.</p>
                  </div>
              </div>
          </a>
      </div>
      <!-- Quiero Hacer una Donación -->
      <div class="col-md-4 text-center producto">
          <a href="HacerDonacion.php" class="card-link">
              <div class="card">
                  <div class="card-content text-center">
                      <h3 class="nombre">Quiero Hacer una Donación</h3>
                      <p class="descripcion">¿Tienes materiales, libros, equipos tecnológicos u otros recursos que 
                          te gustaría donar para apoyar a estudiantes que los necesitan? Aquí puedes conocer 
                          cómo puedes contribuir con tus bienes para marcar una diferencia en la vida de quienes 
                          están en busca de estos recursos. Tu generosidad en forma de donaciones físicas puede 
                          proporcionar el apoyo necesario para que los estudiantes continúen con sus estudios y 
                          proyectos. Gracias por tu disposición a compartir lo que tienes y ayudar a construir un 
                          futuro educativo más accesible para todos.</p>
                  </div>
              </div>
          </a>
      </div>
  </div>
  </div>

  <!--<Pie de la página.-->
  <?php include '../Footer.php'; ?>
  <!--Fin pie de la página.-->
    
  <div class="accessibility" title="Accesibilidad" id="accessibility" onclick="abrirAcce()">
    <img src="/img/utileria/accessibility.png" alt="">

  </div>
  <div class="BoxAccesibility" id="BoxAccesibility">
    <p>Lector de texto</p>
    <div class="centrado">
      <button class="buttonLec" onclick="reiniciarLectura()"><i class="fas fa-play"></i> </button>
      <button class="buttonLec" onclick="toggleSpeech()"><i class="fas fa-stop"></i> </button>
    </div>
  </div>
    
  <script src="/script.js"></script>
  <!-- Asegúrate de incluir tu script JavaScript al final del cuerpo del documento -->

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

  </body>
</html>