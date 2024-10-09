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
  <link rel="stylesheet" type="text/css" href="../../Estilos/Universidades.css">
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
  <section id="prodetails">
    <div class="single-pro-image">
      <img src="../../img/uniPics/ITA/ITA3.png" id="ImgPrinc" alt="Dell_7480" title="3">
      <div class="small-img-group">
        <div class="small-img-col">
          <img src="../../img/uniPics/ITA/ITA3.png" width="100" alt="Dell_7480" title="3">
        </div>
        <div class="small-img-col">
          <img src="../../img/uniPics/ITA/ITA2.jpg" width="100" alt="Dell_7480" title="2">
        </div>
        <div class="small-img-col">
          <img src="../../img/uniPics/ITA/ITA4.jpg" width="100" alt="Dell_7480" title="4">
        </div>
        <div class="small-img-col">
          <img src="../../img/uniPics/ITA/ITA1.jpeg" width="100" alt="Dell_7480" title="1">
        </div>
      </div>
    </div>
    <div class="info">
      <h1><strong>ITA - Instituto Tecnológico de Aguascalientes</strong></h1>
      <p>El Instituto Tecnológico de Aguascalientes es una institución de educación superior ubicada en la ciudad de Aguascalientes, México La cual ofrece programas educativos en áreas como ingeniería, ciencias de la computación, administración y tecnología, entre otras. Su objetivo principal es formar profesionales altamente capacitados y comprometidos con el desarrollo tecnológico y económico de la región y del país.
        Esta sede tiene una oferta académica de:
      </p>
      <ul style="margin-top: 10px; margin-bottom: 10px;">
        <li>9 ingenierías.</li>
        <li>1 licenciatura.</li>
        <li>4 maestrías.</li>
        <li>1 doctorado.</li>
      </ul>
      <p>Además de la oferta académica, el Instituto Tecnológico de Aguascalientes también realiza actividades de investigación y extensión, colaborando con la industria y otros sectores para impulsar la innovación y el desarrollo tecnológico en la región.        </p>
     </div>
  </section>



  <section id="inter">
    <section id="ininterImg" style="display: flex; align-items: center; justify-content: center;">
      <div class="infointer">
        <img src="../../img/anuncios/Anuncio1.jpg" alt="Anuncio">
      </div>
      <div class="infointer">
        <video src="../../videos/Inter1.mp4" controls alt="Intérprete" autoplay loop muted style="max-height: 100%; max-width: 100%;"></video>
      </div>
    </section>
  </section>
    

  <section id="mapa">
    <h2>Ubicación</h2>
    <div id="map" style="height: 400px;"></div>
</section>

  <br>

  <section id="Calificacion">
    <h2>Califica esta universidad</h2>
    <div class="estrellas">
      <span class="estrella estrella-item" data-valor="1">&#9733;</span>
      <span class="estrella estrella-item" data-valor="2">&#9733;</span>
      <span class="estrella estrella-item" data-valor="3">&#9733;</span>
      <span class="estrella estrella-item" data-valor="4">&#9733;</span>
      <span class="estrella estrella-item" data-valor="5">&#9733;</span>
    </div>
  </section>
  <script src="Estrellas.js"></script>

  <section id="lista-carreras">
    <h2><strong>Carreras ofrecidas</strong></h2>
    <label for="select-categoria">Selecciona una categoría:</label>
    <select id="select-categoria" onchange="getCareers()">
      <option value="Ciencias sociales">Ciencias Sociales</option>
      <option value="Ciencias biológicas">Ciencias biológicas</option>
      <option value="Ciencias físico-matemáticas">Ciencias físico-matemáticas</option>
      <option value="Arte y humanidades">Arte y humanidades</option>
    </select>
    <ul id="carreras-list"></ul>
    <!-- Lista de carreras -->
  </section>
  <section id="comentarios">
    <h2>Comentarios</h2>
    <div id="comentarios-lista">
      <!-- Aquí se mostrarán los comentarios -->
    </div>
    <form id="formulario-comentario">
      <label for="nombre">Nombre:</label>
      <input type="text" id="nombre" required>
      <label for="comentario">Comentario:</label>
      <textarea id="comentario" required></textarea>
      <button id="btn-enviar" type="submit">Enviar</button>
    </form>
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

  <script>
    // Agregar comentario
    document.getElementById('formulario-comentario').addEventListener('submit', function(event) {
      event.preventDefault();
      var nombre = document.getElementById('nombre').value;
      var comentario = document.getElementById('comentario').value;
      var comentarioHTML = '<div><strong>' + nombre + ':</strong> ' + comentario + '</div>';
      document.getElementById('comentarios-lista').innerHTML += comentarioHTML;
      // Limpiar los campos del formulario después de enviar
      document.getElementById('nombre').value = '';
      document.getElementById('comentario').value = '';
    });

  </script>

  <script>
    function initMap() {
      // Coordenadas del Instituto Tecnológico de Aguascalientes
      var upCoords = {
        lat: 21.878324300661678, 
        lng: -102.2628972871947
      };

      // Crear el mapa
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 16,
        center: upCoords
      });

      // Marcador en la ubicación del Instituto Tecnológico de Aguascalientes
      var marker = new google.maps.Marker({
        position: upCoords,
        map: map,
        title: 'Instituto Tecnológico de Aguascalientes'
      });
    }
  </script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC74vNzXYTHsQkW8rbDL4Qf8IsEszGRq-Y&callback=initMap" async defer></script>
</body>

</html>
