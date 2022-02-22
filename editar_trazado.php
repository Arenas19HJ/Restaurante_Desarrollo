<?php
include("php/cn.php");
$id_pedido= $_REQUEST['id_pedido'];

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>HIRAISHIN</title>
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/font.css">
</head>
<body>
    <header class="main-header">
       <div class="container container--flex">
           <div class="logo-container column column--50">
               <h1 class="logo">HIRAISHIN</h1>
           </div>
           <div class="main-header__contactInfo column column--50">
               <p class="main-header__contactInfo__phone">
                   <span class="icon-phone">935030509</span>
               </p>
               <p class="main-header__contactInfo__address">
                   <span class="icon-location">Calle Libertad 457 - Salaverry, La Libertad, Perú</span>
               </p>
           </div>
       </div>
   </header>
   
   <nav class="main-nav">
       <div class="container container--flex">
           <span class="icon-menu" id="btnmenu"></span>
           <ul class="menu" id="menu">
               <li class="menu__item"><a href="indexAdmin.html" class="menu__link ">Inicio</a></li>
               <li class="menu__item"><a href="categorias.php" class="menu__link">Categorias</a></li>
               <li class="menu__item"><a href="plato.php" class="menu__link ">Platos</a></li>
               <li class="menu__item"><a href="promociones.php" class="menu__link">Promociones</a></li>
               <li class="menu__item"><a href="entregas.php" class="menu__link ">Lista de entregas</a></li>
               <li class="menu__item"><a href="trazado.php" class="menu__link menu__link--select">Trazado de pedidos</a></li>
           </ul>
           <div class="social-icon">
               <a href="" class="social-icon__link"><span class="icon-facebook"></span></a>
               <a href="" class="social-icon__link"><span class="icon-twitter"></span></a>
               <a href="" class="social-icon__link"><span class="icon-mail"></span></a>
               <a href="" class="social-icon__link"><span class="icon-instagram"></span></a>
           </div>
       </div>
   </nav>
    <section class="banner2"><img src="img/banner.jpeg" alt="" class="banner2__img"></section>
    
    <main class="main">
        <section class="group">
            <div class="container container--flex">
                   <h3 class="group__title">Editar Trazado</h3>
            </div>
        </section>
        <div class="container">
            <h5>
            </h5>
            <h5>
                (*) Campos obligatorios
            </h5>
            <br>
            <form action="php/editarTrazado.php" method="post" enctype="multipart/form-data">
               <input type="hidden" name="id_pedido" value="<?php echo $id_pedido; ?>">
                <label class="lista" for="">Descripción: </label>
                <input class="input" type="text" name="descripcion">         
                <br>
                <br>
                <label class="lista" for="">Cocinero(s): </label>
                <input class="input" type="text" name="cocinero">         
                <br>
                <br>
                <label class="lista" for="">Repartidor: </label>
                <input class="input" type="text" name="repartidor">         
                <br>
                <br>
                <label class="lista" for="">Temperatura: </label>
                <input class="input" type="text" name="temperatura">         
                <br>
                <br>
                <input type="submit" value="Guardar" class="btn2" style="margin: 10px 40px 10px 10px" target="_blank">
            </form>
        </div>
    </main>      
            
    <footer class="main-footer">
       <div class="container container--flex">
           <div class="column column--33">
               <h2 class="column__title">¿Por que visitarnos?</h2>
               <p class="column__txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates ut doloribus harum saepe nemo officia dolor voluptate aperiam eos esse libero eveniet, maiores dolores animi, alias ab fugit officiis ex.</p>
           </div>
           <div class="column column--33">
               <h2 class="column__title">Contactanos</h2>
               <p class="column__txt">Calle Libertad 457 Salaverry-La Libertad, Perú</p>
               <p class="column__txt">Telefono: 935-030-509</p>
               <p class="column__txt">hiraishinxddd@gmail.com</p>
           </div>
           <div class="column column--33">
               <h2 class="column__title">Siguenos en nuestras redes</h2>
               <p class="column__txt"><a href="" class="icon-facebook">Facebook</a></p>
               <p class="column__txt"><a href="" class="icon-twitter">Siguenos en twitter</a></p>
               <p class="column__txt"><a href="https://www.youtube.com/channel/UCPbCFn2sN7IclNutD2Aiqkw" class="icon-youtube">Suscribete a nuestro canal</a></p>
               <p class="column__txt"><a href="" class="icon-instagram">Siguenos en Instagram</a></p>
           </div>
        </div>
        <p class="copy">copirai</p>
   </footer>
    <script src="js/menu.js"></script>
</body>
</html>