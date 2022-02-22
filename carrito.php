<?php
include("php/cn.php");
session_start();
$id_pedido=$_SESSION['id_pedido'];
$carrito ="SELECT  carrito.id_usuario, plato.id_plato, carrito.cantidad, plato.nombre, plato.descripcion, plato.imagen FROM carrito JOIN plato ON carrito.id_plato=plato.id_plato  WHERE id_pedido='$id_pedido'";
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
               <h1 class="logo">HIRAISHIN 2.2</h1>
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
               <li class="menu__item"><a href="carrito.php" class="menu__link menu__link--select">Ver carrito</a></li>
               <li class="menu__item"><a href="realizacionPago.html" class="menu__link">Realizar pago</a></li>
               <li class="menu__item"><a href="comentario.php" class="menu__link">Calificar</a></li>
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
                   <h3 class="group__title">Productos agregados al carrito</h3>
            </div>
        </section>
    </main>  
            <div class="container container--flex registro__platos">        
                  <div class="column column--16">
                   <h3 class="column__title">Nombre</h3>
                   </div>
                  <div class="column column--16"> 
                   <h3 class="column__title">Descripcion</h3>
                   </div>
                   <div class="column column--16"> 
                   <h3 class="column__title">Cantidad</h3>
                   </div>
                  <div class="column column--16">  
                   <h3 class="column__title">Imagen</h3>
                   </div>
                   <div class="column column--16">  
                   <h3 class="column__title">acciones</h3>
                   </div>     
            </div>
<?php $resultado = mysqli_query($conexion, $carrito);
    
while($row = mysqli_fetch_assoc($resultado)){?>            
            <div class="container container--flex registro__platos">        
                  <span class="container container--flex registro__platos slec" id="btnOpciones2">
                       <div class="column column--16">
                       <p class="column__txt"><?php echo $row ["nombre"];?></p>
                       </div>
                      <div class="column column--16"> 
                       <p class="column__txt"><?php echo $row ["descripcion"];?></p>
                       </div>
                       <div class="column column--16"> 
                       <p class="column__txt"><?php echo $row ["cantidad"];?></p>
                       </div>
                        <div class="column column--16">  
                        <img src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"/>
                        </div>
                       <div class="column column--16"> 
                       <a href="editar_carrito.php?id_plato=<?php echo $row["id_plato"]; ?>" class="social-icon__link"><span class="icon-modi" ></span></a> 
                       <a href="php/eliminar_carrito.php?id_plato=<?php echo $row["id_plato"]; ?>" class="social-icon__link"><span class="icon-delete" ></span></a> 
                       </div>
                   </span>
            </div> 
<?php }?>
    <center>
        <div class="column column--34">
        <a href="php/registrar_pedido.php?&id_pedido=<?php echo $id_pedido; ?>" class="btn btn--contact">Confirmar</a>
           </div>
    </center> 
 <br>  
<br>
<br>           
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