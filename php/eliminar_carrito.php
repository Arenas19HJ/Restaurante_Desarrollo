<?php
include("cn.php");
session_start();
$id_plato= $_REQUEST['id_plato'];
$id_usuario=$_SESSION['id_usuario'];
$eliminar_carrito= mysqli_query($conexion,"DELETE FROM carrito WHERE (id_plato= '$id_plato' AND id_usuario='$id_usuario') ");
if($eliminar_carrito){
        header("location: ../carrito.php");
}else{
        echo "Error al eliminar";
}

?>