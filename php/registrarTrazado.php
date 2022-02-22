<?php
include 'cn.php';
//RECIBIR LOS DATOS Y ALMACENAR EN VARIABLES
$id_pedido=$_POST["id_pedido"];
$descripcion=$_POST["descripcion"];
$cocinero=$_POST["cocinero"];
$repartidor=$_POST["repartidor"];
$temperatura=$_POST["temperatura"];

//CONSULTA PARA INSERTAR


//EJECUTAR CONSULTA
$resultado = mysqli_query($conexion,"UPDATE pedido SET cocinero='$cocinero', repartidor='$repartidor', descripcion_pedido='$descripcion', temperatura='$temperatura' WHERE id_pedido= '$id_pedido'");

if($resultado){
    header('location: ../trazado.php');
}else{
    echo 'Trazado No registrado';
}

//CERRAR CONEXIÓN
mysqli_close($conexion);

?>