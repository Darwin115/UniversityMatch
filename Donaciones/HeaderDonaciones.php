<?php
$base_path = '';
if (strpos($_SERVER['REQUEST_URI'], 'Favoritos') !== false) {
    $base_path = '';
} elseif (strpos($_SERVER['REQUEST_URI'], 'BuscarDonacion') !== false) {
    $base_path = '';
} elseif (strpos($_SERVER['REQUEST_URI'], 'Carrito') !== false) {
    $base_path = '';
} 

?>
<div class="bottom-bar">
    <div class="container-fluid">
        <div class="row align-items-center">
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
            <div class="col-md-3">
                <div class="user">
                    <a href="Favoritos.php" class="btn wishlist">
                        <i class="fa fa-heart"></i>
                        <span>(0)</span>
                    </a>
                    <a href="Carrito.php" class="btn cart">
                        <i class="fa fa-shopping-cart"></i>
                        <span>(0)</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
