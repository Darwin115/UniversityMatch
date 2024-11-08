<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UNID || UniversityMatch</title>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
  <link rel="stylesheet" type="text/css" href="../../Estilos/style.css">
  <link rel="stylesheet" type="text/css" href="../../Estilos/stylevistaproductos.css">
  <link rel="stylesheet" type="text/css" href="../../Estilos/FooterStyle.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-GDWlJng9xEwG1eYTTvWe4H9fA1Idb51fbrYw5YK51m6JzCj5lCR4gI6Rbmu1nCrXOjW1QrR7TjDXXESmtv5D5Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-4LTLCWXEBE"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
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

    <!--Agregamos la imagen principal del producto y la información-->
    <section id="prodetails">
        <div class="single-pro-image">
            <img src="../../img/uniPics/UNID/UNIDL.jpg" id="ImgPrinc" alt="Dell_7480" title="Dell 7480">
            <div class="small-img-group">
                <div class="small-img-col">
                    <img src="../../img/uniPics/UNID/UNID1.jpg" width="100" alt="Dell_7480" title="Dell 7480">
                </div>
                <div class="small-img-col">
                    <img src="../../img/uniPics/UNID/UNID2.jpg" width="100" alt="Dell_7480" title="Dell 7480">
                </div>
                <div class="small-img-col">
                    <img src="../../img/uniPics/UNID/UNID3.jpg" width="100" alt="Dell_7480" title="Dell 7480">
                </div>
                <div class="small-img-col">
                  <img src="../../img/uniPics/UNID/UNIDL.jpg" width="100" alt="Dell_7480" title="Dell 7480">
              </div>
            </div>
            <div style="text-align:center; margin-top:20px;">
              <a href="IMGS_UNID.html" class="btn" style="text-decoration: none; color: white; background-color: #007bff; padding: 10px 20px; border-radius: 5px;">Ver Más Imágenes</a>
          </div>
        </div>
        <div class="info">
          <button class="buttonLec" onclick="toggleSpeech()"><i class="fas fa-stop"></i> </button>
          <button class="buttonLec" onclick="reiniciarLectura()"><i class="fas fa-play"></i> </button>
            <h1><strong>UNID - Universidad Interamericana para el Desarrollo</strong></h1>
            <p>La Universidad Interamericana para el Desarrollo es una institución educativa multisede que promueve la excelencia académica, el desarrollo humano y el liderazgo profesional a través de un modelo educativo que integra valores, tecnología de vanguardia y experiencia laboral real, facilitando la inserción al mundo empresarial.
              La filosofía de la UNID se basa en una formación integral en la cual el desarrollo de la inteligencia y la adquisición del saber son fundamentales, potenciando el uso adecuado de la razón orientado a la búsqueda de la verdad, para emitir juicios rectos y equilibrados de los educandos, sobre sí mismos y el medio que les rodea.
            </p>
            <a href="http://www.up.edu.mx" target="_blank" class="btn-ir-pagina">Ir a la Página</a>        </div>
    </section>

    <section id="mapa">
      <h2>Ubicación</h2>
      <div id="map"></div>
    </section>   
</section>  
    <section id="lista-carreras">
      <h2><strong>Carreras ofrecidas</strong></h2>
      <label for="select-categoria">Selecciona una categoría:</label>
      <select id="select-categoria" onchange="getCareers()">
        <option value="Ciencias sociales">Ciencias Sociales</option>
        <option value="Ciencias biológicas">Ciencias biológicas</option>
        <option value="Ciencias físico-matemáticas">Ciencias físico-matemáticas</option>
        <option value="Arte y humanidades">Arte y humanidades</option>
      </select>
      <ul id="carreras-list"></ul> <!-- Lista de carreras -->
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
      url: "Consulta_UNID.php", // Ruta al archivo PHP que maneja la solicitud AJAX
      data: { categoria: categoria },
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
    // Coordenadas de la Universidad Panamericana (ejemplo)
    var upCoords = { lat: 21.887079934716855, lng: -102.3128910767948 }; 

    // Crear el mapa
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 16,
      center: upCoords
    });

    // Marcador en la ubicación de la Universidad Panamericana
    var marker = new google.maps.Marker({
      position: upCoords,
      map: map,
      title: 'Universidad Panamericana'
    });
  }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDgWWQxw0YK2YUA20BBvUbZhWUbP7LDbIk&callback=initMap" async defer></script>

</body>

</html>
