<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ITA || UniversityMatch</title>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
  <link rel="stylesheet" type="text/css" href="../Estilos/style.css">
  <link rel="stylesheet" type="text/css" href="../Estilos/stylevistaproductos.css">
  <link rel="stylesheet" type="text/css" href="../Estilos/FooterStyle.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-GDWlJng9xEwG1eYTTvWe4H9fA1Idb51fbrYw5YK51m6JzCj5lCR4gI6Rbmu1nCrXOjW1QrR7TjDXXESmtv5D5Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Favicons -->
  <link href="../img/Logo3.png" rel="icon">
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
  <?php include '../Header.php'; ?>
  <?php include '../vistas/ITA/HeaderITA.php'; ?>  

  <!--Agregamos la información de la universidad-->
  <section id="inRetiImg">
    <div class="infoRetiImg", style="text-align: center;"><img src="../img/uniPics/ITA/Carreras/IMECA.png" alt=""></div>
  </section>
  <h2>PERFIL DE INGRESO</h2>
  <section id="prodetails">
    <div class="infoReti">
        <p>Los aspirantes a ingresar en las Ingenierías ofrecidas por el Instituto Tecnológico de Aguascalientes deberán tener:</p>
        <ul>
            <li>Capacidad de análisis y síntesis.</li>
            <li>Pensamiento matemático.</li>
            <li>Comprensión lectora con capacidad para identificar y aplicar elementos de la lengua.</li>
            <li>Habilidad para resolver problemas en las áreas de matemáticas y física.</li>
            <li>Actitud crítica.</li>
        </ul>
    </div>
  </section>
  <h2>PERFIL DE EGRESO</h2>
  <section id="prodetails">
    <div class="infoReti">
        <ul>
            <li>Habilidad para identificar, formular y resolver problemas complejos de ingeniería aplicando principios de ingeniería, ciencias, y matemáticas.</li>
            <li>Habilidad para aplicar diseño de ingeniería para producir soluciones que cumplan con necesidades específicas con restricciones de salud pública, seguridad, bienestar, así como factores globales, culturales, sociales, medioambientales, y económico.</li>
            <li>Habilidad para comunicarse efectivamente en diversas audiencias.</li>
            <li>Habilidad para reconocer ética y profesionalmente responsabilidades en situaciones ingenieriles y hacer juicios fundamentados, que deben considerar el impacto de la ingeniería.</li>
            <li>Habilidad para trabajar efectivamente en equipo cuyos miembros provean, crean un ambiente colaborativo incluyente, establezcan objetivos, planeen tareas, y logren los objetivos.</li>
            <li>Habilidad para desarrollar y conducir experimentos apropiadamente, analizar e interpretar datos, y usar juicio de ingeniería para obtener conclusiones.</li>
            <li>Habilidad para adquirir y aplicar nuevos conocimientos según se requiera, utilizando estrategias de aprendizaje apropiadas.</li>
        </ul>
    </div>
  </section>
  
  <h2>RETÍCULA</h2>
  <section id="inRetiImg">
      <div class="infoRetiImg", style="text-align: center;"><img src="../img/uniPics/ITA/Reticulas/RetiIMECA1.jpg" alt=""></div>
      <div class="infoRetiImg", style="text-align: center;"><img src="../img/uniPics/ITA/Reticulas/RetiIMECA2.jpg" alt=""></div>
  </section>

  <!--<Pie de la página.-->
  <?php include '../Footer.php'; ?>
  <!--Fin pie de la página.-->

  <!--<Accesibilidad-->
  <div class="accessibility" title="Accesibilidad" id="accessibility" onclick="abrirAcce()">
    <img src="../img/utileria/accessibility.png" alt="">

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

<script>
  var MainImg = document.getElementById("ImgPrinc");
  var smallimgs = document.getElementsByClassName("small-img-col"); // Cambié el selector

  smallimgs[0].onclick = function () {
    MainImg.src = this.querySelector('img').src; // Cambié smallimg[0] a this
  }
  smallimgs[1].onclick = function () {
    MainImg.src = this.querySelector('img').src; // Cambié smallimg[1] a this
  }
  smallimgs[2].onclick = function () {
    MainImg.src = this.querySelector('img').src; // Cambié smallimg[2] a this
  }
  smallimgs[3].onclick = function () {
    MainImg.src = this.querySelector('img').src; // Cambié smallimg[3] a this
  }

</script>

  <script>
    function getCareers() {
      var categoria = $('#select-categoria').val();
      $.ajax({
        type: "POST",
        url: "Consulta_ITA.php", // Ruta al archivo PHP que maneja la solicitud AJAX
        data: {
          categoria: categoria
        },
        dataType: 'json',
        success: function(response) {
          // Limpiar la lista de carreras
          $('#lista-carreras ul').empty();
          // Agregar cada carrera a la lista
          response.forEach(function(carrera) {
            $('#lista-carreras ul').append('<li>' + carrera + '</li>');
          });
        },
        error: function(xhr, status, error) {
          console.error(xhr.responseText);
        }
      });
    }
  </script>

  <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.min.js"></script>

</body>

</html>