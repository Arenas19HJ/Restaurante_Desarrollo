<?php
include("cn.php");
$id= $_REQUEST['id_promocion'];
$eliminar_plato= mysqli_query($conexion,"DELETE FROM promociones WHERE id_promocion =$id ");
if($eliminar_plato){
        header("location: ../promociones.php");
}else{
        echo "Error al eliminar";
}

?>