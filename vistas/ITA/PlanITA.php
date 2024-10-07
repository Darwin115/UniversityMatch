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
  
  <!--Agregamos la información de la universidad-->
  <section id="inPlan">
    <h2>Ingenierías y Licenciaturas</h2>
    <section id="inPlanImg">
        <div class="infoPlan">
            <a href="../../CarrerasITA/ITICS.php"><img src="../../img/uniPics/ITA/Carreras/ITICS.png" alt></a>
        </div>
        <div class="infoPlan">
          <a href="../../CarrerasITA/IG.php"><img src="../../img/uniPics/ITA/Carreras/IG.png" alt></a>
        </div>
        <div class="infoPlan">
            <a href="../../CarrerasITA/IQ.php"><img src="../../img/uniPics/ITA/Carreras/IQ.png" alt></a>
        </div>
    </section>
    <section id="inPlanImg">
      <div class="infoPlan">
          <a href="../../CarrerasITA/IELECTRI.php"><img src="../../img/uniPics/ITA/Carreras/IELECTRI.png" alt></a>
      </div>
      <div class="infoPlan">
        <a href="../../CarrerasITA/IELECTRO.php"><img src="../../img/uniPics/ITA/Carreras/IELECTRO.png" alt></a>
      </div>
      <div class="infoPlan">
          <a href="../../CarrerasITA/II.php"><img src="../../img/uniPics/ITA/Carreras/II.png" alt></a>
      </div>
    </section>
    <section id="inPlanImg">
      <div class="infoPlan">
          <a href="../../CarrerasITA/IMATE.php"><img src="../../img/uniPics/ITA/Carreras/IMATE.png" alt></a>
      </div>
      <div class="infoPlan">
        <a href="../../CarrerasITA/IMECA.php"><img src="../../img/uniPics/ITA/Carreras/IMECA.png" alt></a>
      </div>
      <div class="infoPlan">
          <a href="../../CarrerasITA/IS.php"><img src="../../img/uniPics/ITA/Carreras/IS.png" alt></a>
      </div>
    </section>
    <section id="inPlanImg">
      <div class="infoPlan">
          <a href="../../CarrerasITA/LA.php"><img src="../../img/uniPics/ITA/Carreras/LA.png" alt></a>
      </div>
    </section>
  </section>

  <!--<Pie de la página.-->
  <?php include '../../Footer.php'; ?>
  <!--Fin pie de la página.-->

  <!-- Scripts -->

  <script>
    var speechSynthesisInstance;
    var textoUniversidad = "El plan de estudios del ITA se caracteriza por su actualización constante, adaptándose a las demandas del mercado laboral y a los avances tecnológicos. Además, promueve el desarrollo de habilidades como el trabajo en equipo, el liderazgo, la innovación y la ética profesional, preparando a los estudiantes para enfrentar los retos del mundo laboral con éxito. Este plan de estudios incluye asignaturas fundamentales en áreas como matemáticas, ciencias básicas, ingeniería y tecnología, así como materias optativas que permiten a los estudiantes personalizar su formación de acuerdo con sus intereses y aspiraciones profesionales. Asimismo, el ITA ofrece programas de movilidad estudiantil y convenios de colaboración con instituciones nacionales e internacionales, brindando a los estudiantes la oportunidad de enriquecer su experiencia académica y cultural.";

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
