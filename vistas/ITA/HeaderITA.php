<?php
$base_path = '';
if (strpos($_SERVER['REQUEST_URI'], 'ITICS') !== false) {
    $base_path = '../vistas/ITA/';
} elseif (strpos($_SERVER['REQUEST_URI'], 'IG') !== false) {
    $base_path = '../vistas/ITA/';
} elseif (strpos($_SERVER['REQUEST_URI'], 'IELECTRI') !== false) {
  $base_path = '../vistas/ITA/';
} elseif (strpos($_SERVER['REQUEST_URI'], 'IELECTRO') !== false) {
  $base_path = '../vistas/ITA/';
} elseif (strpos($_SERVER['REQUEST_URI'], 'II') !== false) {
  $base_path = '../vistas/ITA/';
} elseif (strpos($_SERVER['REQUEST_URI'], 'IMATE') !== false) {
  $base_path = '../vistas/ITA/';
} elseif (strpos($_SERVER['REQUEST_URI'], 'IMECA') !== false) {
  $base_path = '../vistas/ITA/';
} elseif (strpos($_SERVER['REQUEST_URI'], 'IQ') !== false) {
  $base_path = '../vistas/ITA/';
} elseif (strpos($_SERVER['REQUEST_URI'], 'IS') !== false) {
  $base_path = '../vistas/ITA/';
} elseif (strpos($_SERVER['REQUEST_URI'], 'LA') !== false) {
  $base_path = '../vistas/ITA/';
} 
?>

<section id="header2">
  <ul id="navbar2">
    <li><a href="<?php echo $base_path; ?>Vista_ITA.php" title="Landing-Page">ITA</a></li>
    <li><a href="<?php echo $base_path; ?>Info_ITA.php" title="Landing-Page">Información General</a></li>
    <li><a href="<?php echo $base_path; ?>PlanITA.php" title="Test Vocacional">Plan de Estudios</a></li>
    <li><a href="<?php echo $base_path; ?>MatriculaITA.php" title="Matrícula">Matrícula</a></li>
    <li><a href="<?php echo $base_path; ?>IMGS_ITA.php" class="active" title="Universidades">Galería de Imágenes</a></li>
    <li><a href="<?php echo $base_path; ?>AplicarITA.php"class="active" title="Aplicar">¡Aplica ahora!</a></li>
    <li><a href="https://ceneval.edu.mx/examenes-ingreso-exani_ii/" target="_blank">EXANII-II</a></li>
    <li><a href="https://aguascalientes.tecnm.mx/" target="_blank" class="btn-ir-pagina">Ir a la Página</a></li>
  </ul>
</section>