<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UniversityMatch || CATÁLOGO DE CURSOS</title>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-4M2DHVY2HW"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-4M2DHVY2HW');
    </script>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="../Estilos/style.css">
    <link rel="stylesheet" href="./CursosStyle.css">
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

<body onload="iniciarLectura() , abrirAcce()">
  <?php include '../Header.php'; ?>

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

  <!--<Pie de la página.-->
  <?php include '../Footer.php'; ?>
  <!--Fin pie de la página.-->

  <!--Scripts-->
  <script src="/script.js"></script>
  <script src="Cursos.js"></script>
  <!--Fin scripts-->
  </body>
</html>