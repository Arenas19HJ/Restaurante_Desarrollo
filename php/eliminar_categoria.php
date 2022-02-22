<?php
include("cn.php");
$id= $_REQUEST['id_categoria'];
$eliminar_plato= mysqli_query($conexion,"DELETE FROM categorias WHERE id_categoria =$id ");
if($eliminar_plato){
        header("location: ../categorias.php");
}else{
        echo "Error al eliminar";
}

?>