<?php
include 'cn.php';
//RECIBIR LOS DATOS Y ALMACENAR EN VARIABLES
$Numpedi = $_POST["Numpedi"];
$Repartidor = $_POST["Repartidor"];
//CONSULTA PARA INSERTAR
$insertar = "INSERT INTO entregas(id_pedido,repartidor) VALUES ('$Numpedi','$Repartidor')";

//EJECUTAR CONSULTA
$resultado = mysqli_query($conexion,$insertar);

if($resultado){
    header('location: ../entregas.php');
}else{
    echo 'Entrega No registrada';
}

//CERRAR CONEXIÓN
mysqli_close($conexion);

?>