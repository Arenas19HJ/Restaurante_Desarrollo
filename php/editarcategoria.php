<?php
    include("cn.php");
    $id_categoria=$_POST["id_categoria"];
    $nombre = $_POST["nombre"];
    $descripcion = $_POST["descripcion"];
    $editar_carta= mysqli_query($conexion,"UPDATE categorias SET nombre_categoria='$nombre', descripcion_categoria='$descripcion' WHERE id_categoria= '$id_categoria' ");

    if($editar_carta){
        header("location: ../categorias.php");
    }else{
        echo "Error al editar";
}
?>