<?php
$base_path = '';
if (strpos($_SERVER['REQUEST_URI'], 'Formularios') !== false) {
    $base_path = '../';
} elseif (strpos($_SERVER['REQUEST_URI'], 'Rec_Catalogo') !== false) {
    $base_path = '../';
} elseif (strpos($_SERVER['REQUEST_URI'], 'Carreras') !== false) {
    $base_path = '../';
} elseif (strpos($_SERVER['REQUEST_URI'], 'Donaciones') !== false) {
    $base_path = '../';
} elseif (strpos($_SERVER['REQUEST_URI'], 'HacerDonacion') !== false) {
    $base_path = '../';
} elseif (strpos($_SERVER['REQUEST_URI'], 'BuscarFormulario') !== false) {
    $base_path = '../';
} elseif (strpos($_SERVER['REQUEST_URI'], 'BuscarDonacion') !== false) {
    $base_path = '../';
} elseif (strpos($_SERVER['REQUEST_URI'], 'AplicarITA') !== false) {
    $base_path = '../../';
} elseif (strpos($_SERVER['REQUEST_URI'], 'IMGS_ITA') !== false) {
    $base_path = '../../';
} elseif (strpos($_SERVER['REQUEST_URI'], 'IMGS_UNID') !== false) {
    $base_path = '../../';
} elseif (strpos($_SERVER['REQUEST_URI'], 'IMGS_UP') !== false) {
    $base_path = '../../';
} elseif (strpos($_SERVER['REQUEST_URI'], 'Info_ITA') !== false) {
    $base_path = '../../';
} elseif (strpos($_SERVER['REQUEST_URI'], 'MatriculaITA') !== false) {
    $base_path = '../../';
} elseif (strpos($_SERVER['REQUEST_URI'], 'PlanITA') !== false) {
    $base_path = '../../';
} elseif (strpos($_SERVER['REQUEST_URI'], 'Vista_ITA') !== false) {
    $base_path = '../../';
} elseif (strpos($_SERVER['REQUEST_URI'], 'Vista_UNID') !== false) {
    $base_path = '../../';
} elseif (strpos($_SERVER['REQUEST_URI'], 'Vista_UP') !== false) {
    $base_path = '../../';
} elseif (strpos($_SERVER['REQUEST_URI'], 'IELECTRI') !== false) {
    $base_path = '../../';
} elseif (strpos($_SERVER['REQUEST_URI'], 'IELECTRO') !== false) {
    $base_path = '../../';
} elseif (strpos($_SERVER['REQUEST_URI'], 'IG') !== false) {
    $base_path = '../../';
} elseif (strpos($_SERVER['REQUEST_URI'], 'II') !== false) {
    $base_path = '../../';
} elseif (strpos($_SERVER['REQUEST_URI'], 'IMATE') !== false) {
    $base_path = '../../';
} elseif (strpos($_SERVER['REQUEST_URI'], 'IMECA') !== false) {
    $base_path = '../../';
} elseif (strpos($_SERVER['REQUEST_URI'], 'IQ') !== false) {
    $base_path = '../../';
} elseif (strpos($_SERVER['REQUEST_URI'], 'IS') !== false) {
    $base_path = '../../';
} elseif (strpos($_SERVER['REQUEST_URI'], 'ITICS') !== false) {
    $base_path = '../../';
} elseif (strpos($_SERVER['REQUEST_URI'], 'LA') !== false) {
    $base_path = '../../';
}
?>

<section id="header">
  <a href="<?php echo $base_path; ?>index.php">
    <img src="<?php echo $base_path; ?>img/Logo2.jpg" class="sin-borde" alt="logo" title="Logo" width="250">
  </a>
  <ul id="navbar">
    <ul id="navbar">
      <span>&nbsp;&nbsp;&nbsp;</span>
      <li><a class="active" href="<?php echo $base_path; ?>index.php" title="Inicio">Inicio</a></li>
      <li><a href="<?php echo $base_path; ?>Formularios/Test.php" title="Test Vocacional">Test Vocacional</a></li>
      <li><a href="<?php echo $base_path; ?>Cursos" title="Universidades">Cursos</a></li>
      <li><a href="<?php echo $base_path; ?>Rec_Catalogo/Catalogo.php" title="Universidades">Universidades</a></li>
      <li><a href="<?php echo $base_path; ?>Carreras/Carreras.php" title="Universidades">Carreras</a></li>
      <li><a href="<?php echo $base_path; ?>Donaciones/Donaciones.php" title="Universidades">Donaciones</a></li>
    </ul>
  </ul>
</section>

