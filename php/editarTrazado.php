<?php
    include("cn.php");
    $id_pedido = $_POST["id_pedido"];
    $cocinero = $_POST["cocinero"];
    $repartidor = $_POST["repartidor"];
    $descripcion = $_POST["descripcion"];
    $temperatura = $_POST["temperatura"];
    $editar_carta= mysqli_query($conexion,"UPDATE pedido SET descripcion_pedido='$descripcion', cocinero='$cocinero', repartidor='$repartidor', temperatura='$temperatura' WHERE id_pedido= '$id_pedido' ");

    if($editar_carta){
        header("location: ../trazado.php");
    }else{
        echo "Error al editar";
}
?>