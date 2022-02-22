<?php
    include("cn.php");
    $id_plato=$_POST["id_plato"];
    $nombre = $_POST["nombre"];
    $categoria = $_POST["id_categoria"];
    $descripcion = $_POST["descripcion"];
    $precio = $_POST["precio"];
    $imagen = addslashes(file_get_contents($_FILES["imagen"]["tmp_name"]));
    $editar_carta= mysqli_query($conexion,"UPDATE plato SET nombre='$nombre', id_categoria='$categoria', descripcion='$descripcion', precio='$precio', imagen='$imagen' WHERE id_plato= '$id_plato' ");

    if($editar_carta){
        header("location: ../plato.php");
    }else{
        echo "Error al editar";
}
?>