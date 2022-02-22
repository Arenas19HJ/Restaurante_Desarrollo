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
               <li class="menu__item"><a href="index.html" class="menu__link ">Inicio</a></li>
               <li class="menu__item"><a href="realizacionPedido.php" class="menu__link">Buscar producto</a></li>
               <li class="menu__item"><a href="carrito.php" class="menu__link">Ver carrito</a></li>
               <li class="menu__item"><a href="realizacionPago.html" class="menu__link">Realizar pago</a></li>
               <li class="menu__item"><a href="comentario.php" class="menu__link menu__link--select">Calificar</a></li>
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
                   <h3 class="group__title">Calificar entrega</h3>
            </div>
        </section>
        <div class="container">
            <h5>
                Califique su pedido anterior!
            </h5>
            <br>
            <form action="php/registrar_calificacion.php" method="post">
                <label class="lista" for="">Calificar: </label>
                <input type="text" name="calificacion" placeholder="1-5">
                <br>
                <br>
                <label class="lista" for="">Comentario: </label>
                <textarea class="comentario" name="comentario" placeholder="Escriba su comentario" ></textarea>      
                <br>
                <br>
                <input type="submit" value="Enviar" class="btn2" style="margin: 10px 40px 10px 10px">
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