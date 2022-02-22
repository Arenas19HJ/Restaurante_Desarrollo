<?php
include 'cn.php';
//RECIBIR LOS DATOS Y ALMACENAR EN VARIABLES
$id_pedido = $_REQUEST["id_pedido"];
//CONSULTA PARA INSERTAR
$insertar = "INSERT INTO pedido(id_pedido) VALUES ('$id_pedido')";

//EJECUTAR CONSULTA
$resultado = mysqli_query($conexion,$insertar);

if($resultado){
    header('location: ../realizacionPago.html');
}else{
    echo 'Plato No registrado';
}

//CERRAR CONEXIÓN
mysqli_close($conexion);

?>