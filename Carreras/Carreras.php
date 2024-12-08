<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UniversityMatch || CATÁLOGO DE CARRERAS</title>

  <script async src="https://www.googletagmanager.com/gtag/js?id=G-4M2DHVY2HW"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-4M2DHVY2HW');
  </script>

  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
  <link rel="stylesheet" href="../Estilos/style.css">
  <link rel="stylesheet" href="./Carreras.css">
  <link rel="stylesheet" href="../Estilos/FooterStyle.css">
  <link rel="stylesheet" href="../Estilos/TestStyle.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick-theme.css" />
  <script src="./scriptnav.js"></script>

  <!-- Favicons -->
  <link href="../img/Logo3.png" rel="icon">

  <style>
    .buttonLec {
    background-color: #ffffff;
    color: #246d96;
    border: none;
    width: 35px;
    height: 35px;
    cursor: pointer;
    border-radius: 100px;
    font-size: 12px;
    }

    .buttonLec:hover {
      background-color: #ebebebf6;
    }

    /* Estilo del modal */
    .modal {
      display: none; 
      position: fixed; 
      z-index: 1000; 
      left: 0;
      top: 0;
      width: 100%; 
      height: 100%; 
      overflow: auto; 
      background-color: rgba(0, 0, 0, 0.6); /* Fondo más oscuro */
      overflow: hidden;
    }

    .modal-content {
      background-color: #fefefe;
      margin: 10% auto; /* Aumentar margen superior */
      padding: 20px;
      border: 1px solid #888;
      width: 80%; /* Ancho reducido */
      max-width: 500px; /* Ancho máximo */
      border-radius: 12px; /* Esquinas redondeadas */
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2); /* Sombra más suave */
    }

    #modalImagen {
    max-width: 100%; /* Limitar el ancho de la imagen */
    height: auto; /* Ajustar la altura automáticamente */
    border-radius: 8px; 
    margin-top: 10px; /* Espaciado superior */
}

    .close {
      color: #aaa;
      float: right; 
      font-size: 28px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: black;
      text-decoration: none;
      cursor: pointer;
    }
  </style>
    
</head>

<body onload="iniciarLectura(), abrirAcce()">
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

  <div class="row" id="res"></div>

  <!-- Modal -->
  <div id="backgroundBlur" class="background-blur"></div>
  
  <div id="myModal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <h3 id="modalNombre"></h3>
      <p id="modalDescripcion"></p>
      <img id="modalImagen" src="" alt="Imagen de la carrera" style="max-width: 100%; border-radius: 8px; margin-top: 10px;">
      <button id="conocerUniversidades" class="btn-success">Conocer Universidades</button>
    </div>
  </div>
  <!-- Fin modal -->
  
  <!--<Pie de la página.-->
  <?php include '../Footer.php'; ?>
  <!--Fin pie de la página.-->
    
  <script src="/script.js"></script>
  <script src="Carreras.js"></script>
  </body>
</html>