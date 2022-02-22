<?php
    include("cn.php");
    $nombre = $_POST["nombre"];
    $precio = $_POST["precio"];
	$imagen = addslashes(file_get_contents($_FILES["imagen"]["tmp_name"]));
    $editar_carta= mysqli_query($conexion,"INSERT INTO promociones(nombre, precio,imagen) VALUES ('$nombre','$precio','$imagen')");

    if($editar_carta){
        header("location: ../promociones.php");
    }else{
        echo "Combo no registrado";
}
