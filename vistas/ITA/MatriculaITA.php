<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ITA || UniversityMatch</title>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
  <link rel="stylesheet" type="text/css" href="../../Estilos/style.css">
  <link rel="stylesheet" type="text/css" href="../../Estilos/stylevistaproductos.css">
  <link rel="stylesheet" type="text/css" href="../../Estilos/FooterStyle.css">
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

  <!--Agregamos la imagen principal del producto y la información-->
<h2>Costo de Matriculas</h2>
  <table>
    <tr>
        <th class="centro">Carrera</th>
        <th class="centro">Semestral</th>
        <th class="centro">Anual</th>
    </tr>
    <tr>
        <td>Ingeniería en Tecnologías de la Información y Comunicaciones</td>
        <td class="centro">$2,850 MXN</td>
        <td class="centro">$5,700 MXN</td>
    </tr>
    <tr>
        <td>Ingeniería en Gestión Empresarial</td>
        <td class="centro">$2,850 MXN</td>
        <td class="centro">$5,700 MXN</td>
    </tr>
    <tr>
        <td>Ingeniería Química</td>
        <td class="centro">$2,850 MXN</td>
        <td class="centro">$5,700 MXN</td>
    </tr>
    <tr>
        <td>Ingeniería Eléctrica</td>
        <td class="centro">$2,850 MXN</td>
        <td class="centro">$5,700 MXN</td>
    </tr>
    <tr>
        <td>Ingeniería Electrónica</td>
        <td class="centro">$2,850 MXN</td>
        <td class="centro">$5,700 MXN</td>
    </tr>
    <tr>
        <td>Ingeniería Industrial</td>
        <td class="centro">$2,850 MXN</td>
        <td class="centro">$5,700 MXN</td>
    </tr>
    <tr>
        <td>Ingeniería en Materiales</td>
        <td class="centro">$2,850 MXN</td>
        <td class="centro">$5,700 MXN</td>
    </tr>
    <tr>
        <td>Ingeniería Mecánica</td>
        <td class="centro">$2,850 MXN</td>
        <td class="centro">$5,700 MXN</td>
    </tr>
    <tr>
        <td>Ingeniería en Semiconductores</td>
        <td class="centro">$2,850 MXN</td>
        <td class="centro">$5,700 MXN</td>
    </tr>
    <tr>
        <td>Licenciatura en Administración</td>
        <td class="centro">$2,850 MXN</td>
        <td class="centro">$5,700 MXN</td>
    </tr>
</table>

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

</body>

</html>
