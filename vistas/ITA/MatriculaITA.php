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
        <th class="centro">Con Beca Deportiva</th>
        <th class="centro">Con Beca para Familiares de Empleados del Gobierno</th>
    </tr>
    <tr>
        <td>Ingeniería en Tecnologías de la Información y Comunicaciones</td>
        <td class="centro">$2,850 MXN</td>
        <td class="centro">$5,700 MXN</td>
        <td class="centro">$1,425 MXN</td>
        <td class="centro">$400 MXN</td>
    </tr>
    <tr>
        <td>Ingeniería en Gestión Empresarial</td>
        <td class="centro">$2,850 MXN</td>
        <td class="centro">$5,700 MXN</td>
        <td class="centro">$1,425 MXN</td>
        <td class="centro">$400 MXN</td>
    </tr>
    <tr>
        <td>Ingeniería Química</td>
        <td class="centro">$2,850 MXN</td>
        <td class="centro">$5,700 MXN</td>
        <td class="centro">$1,425 MXN</td>
        <td class="centro">$400 MXN</td>
    </tr>
    <tr>
        <td>Ingeniería Eléctrica</td>
        <td class="centro">$2,850 MXN</td>
        <td class="centro">$5,700 MXN</td>
        <td class="centro">$1,425 MXN</td>
        <td class="centro">$400 MXN</td>
    </tr>
    <tr>
        <td>Ingeniería Electrónica</td>
        <td class="centro">$2,850 MXN</td>
        <td class="centro">$5,700 MXN</td>
        <td class="centro">$1,425 MXN</td>
        <td class="centro">$400 MXN</td>
    </tr>
    <tr>
        <td>Ingeniería Industrial</td>
        <td class="centro">$2,850 MXN</td>
        <td class="centro">$5,700 MXN</td>
        <td class="centro">$1,425 MXN</td>
        <td class="centro">$400 MXN</td>
    </tr>
    <tr>
        <td>Ingeniería en Materiales</td>
        <td class="centro">$2,850 MXN</td>
        <td class="centro">$5,700 MXN</td>
        <td class="centro">$1,425 MXN</td>
        <td class="centro">$400 MXN</td>
    </tr>
    <tr>
        <td>Ingeniería Mecánica</td>
        <td class="centro">$2,850 MXN</td>
        <td class="centro">$5,700 MXN</td>
        <td class="centro">$1,425 MXN</td>
        <td class="centro">$400 MXN</td>
    </tr>
    <tr>
        <td>Ingeniería en Semiconductores</td>
        <td class="centro">$2,850 MXN</td>
        <td class="centro">$5,700 MXN</td>
        <td class="centro">$1,425 MXN</td>
        <td class="centro">$400 MXN</td>
    </tr>
    <tr>
        <td>Licenciatura en Administración</td>
        <td class="centro">$2,850 MXN</td>
        <td class="centro">$5,700 MXN</td>
        <td class="centro">$1,425 MXN</td>
        <td class="centro">$400 MXN</td>
    </tr>
</table>

  <!--<Pie de la página.-->
  <?php include '../../Footer.php'; ?>
  <!--Fin pie de la página.-->

  <!-- Scripts -->

  <script>
    var speechSynthesisInstance;
    var textoUniversidad = "En el Instituto Tecnológico de Aguascalientes, la matrícula se ha convertido en un tema de interés y preocupación para estudiantes y familias por igual. Con cifras claras y concretas, la institución establece que el costo semestral de la matrícula es de $2,850, mientras que el costo anual asciende a $5,700. A pesar de estas cifras, el Instituto reconoce la importancia de garantizar el acceso a la educación superior y, por ende, ofrece oportunidades de becas para aquellos que califiquen. La beca deportiva reduce el costo a $1,425 por semestre, mientras que la beca destinada a Familiares de Empleados del Gobierno disminuye aún más la carga financiera, dejándola en $400. Estas becas no solo alivian el peso económico para los estudiantes, sino que también reflejan el compromiso de la institución con la equidad y la inclusión en el acceso a la educación.";

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
