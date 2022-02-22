<?php
include 'cn.php';
session_start();
//RECIBIR LOS DATOS Y ALMACENAR EN VARIABLES
$venta = $_POST["venta"];
$motivo = $_POST["motivo"];
$id_usuario = $_SESSION['id_usuario'];
//CONSULTA PARA INSERTAR

$insertar = "INSERT INTO solicitud(venta,motivo,id_usuario) VALUES ('$venta','$motivo','$id_usuario')";
//EJECUTAR CONSULTA
$realizacion = mysqli_query($conexion,$insertar);

if ($realizacion){
    header("location: ../solicitud_registrada.html");
}else{
    echo 'solicitud No Registrado';
}
//CERRAR CONEXIÓN
mysqli_close($conexion);

?>