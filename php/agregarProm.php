<?php
include("cn.php");
$id_promocion = $_REQUEST['id_promocion'];
$id_plato= $_REQUEST['id_plato'];
$insertar ="INSERT INTO cola(id_promocion,id_plato) VALUES ('$id_promocion','$id_plato')";
$agregar= mysqli_query($conexion,$insertar);
if($agregar){
        header("location: ../promociones.php");
}else{
        echo "Error al agregar";
}

?>