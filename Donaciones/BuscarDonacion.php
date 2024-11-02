<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Donaciones</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <link rel="stylesheet" href="../Estilos/style.css">
    <link rel="stylesheet" href="./BusDonaciones.css">
    <link rel="stylesheet" href="../Estilos/FooterStyle.css">
    <link rel="stylesheet" href="../Estilos/TestStyle.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick-theme.css" />
    <script src="./scriptnav.js"></script>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="css/style2.css" rel="stylesheet">
</head>

<body>
    <?php include '../header.php'; ?>
    <!-- Bottom Bar Start -->
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
                            <a href="wishlist.html" class="btn wishlist">
                                <i class="fa fa-heart"></i>
                                <span>(0)</span>
                            </a>
                            <a href="cart.html" class="btn cart">
                                <i class="fa fa-shopping-cart"></i>
                                <span>(0)</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bottom Bar End -->     

    <p class="text-center">Explora nuestras donaciones disponibles a continuación. Si necesitas algo específico, ¡contáctanos y te ayudaremos a encontrarlo!</p>
    <span>&nbsp;&nbsp;&nbsp;</span>
    <div class="row" id="res"></div>

    <!--<Pie de la página.-->
    <?php include '../Footer.php'; ?>
    <!--Fin pie de la página.-->
    
    <script src="/script.js"></script>
    <script src="Donaciones.js"></script>

    <a href="#" class="bt custom-btn back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <script src="js/main.js"></script>
</body>

</html>