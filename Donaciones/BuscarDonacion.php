<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de universidades</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="../Estilos/style.css">
    <link rel="stylesheet" href="./BusDonaciones.css">
    <link rel="stylesheet" href="../Estilos/FooterStyle.css">
    <link rel="stylesheet" href="../Estilos/TestStyle.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick-theme.css" />
    <script src="./scriptnav.js"></script>
    
</head>

<body onload="iniciarLectura() , abrirAcce()">
  <?php include '../header.php'; ?>

  <div class="productos">
    <div class="filters-container">
      <select id="filtrar">
        <option value="ninguno">Filtrar por categoría</option>
        <option value="soc">Ciencias Sociales</option>
        <option value="bio">Ciencias Biológicas</option>
        <option value="fm">Ciencias Físico-Matemáticas</option>
        <option value="hum">Arte y Humanidades</option>
      </select>
      <input type="text" id="filtro" placeholder="Buscar por nombre">
      <button id="buscar">Buscar</button>
    </div>
  </div>

  <p class="text-center">Explora nuestras donaciones disponibles a continuación. Si necesitas algo específico, ¡contáctanos y te ayudaremos a encontrarlo!</p>
  <span>&nbsp;&nbsp;&nbsp;</span>
  <div class="row" id="res"></div>

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
  <script src="Donaciones.js"></script>
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