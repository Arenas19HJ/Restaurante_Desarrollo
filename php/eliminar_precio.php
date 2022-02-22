<?php
include("cn.php");
$id= $_REQUEST['id_plato'];
$eliminar_plato= mysqli_query($conexion,"DELETE FROM plato WHERE id_plato =$id ");
if($eliminar_plato){
        header("location: ../plato.php");
}else{
        echo "Error al eliminar";
}

?>
