<?php
include("cn.php");
$id_usuario = $_REQUEST['id_usuario'];
$id_plato= $_REQUEST['id_plato'];
$id_pedido= $_REQUEST['id_pedido'];
$cantidad=1;
$insertar ="INSERT INTO carrito (id_usuario,id_plato,id_pedido,cantidad) VALUES ('$id_usuario','$id_plato','$id_pedido','$cantidad')";
$agregar= mysqli_query($conexion,$insertar);
if($agregar){
        header("location: ../realizacionPedido.php");
}else{
        echo "Error al agregar";
}

?>
