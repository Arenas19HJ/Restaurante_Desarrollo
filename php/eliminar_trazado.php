<?php
include("cn.php");
$id_trazado= $_REQUEST['id_trazado'];
$eliminar_trazado= mysqli_query($conexion,"DELETE FROM trazado WHERE id_trazado =$id_trazado ");
if($eliminar_trazado){
        header("location: ../trazado.php");
}else{
        echo "Error al eliminar";
}

?>