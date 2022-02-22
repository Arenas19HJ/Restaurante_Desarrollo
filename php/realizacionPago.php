<?php
include 'cn.php';
//RECIBIR LOS DATOS Y ALMACENAR EN VARIABLES
$nombre = $_POST["nombre"];
$direccion = $_POST["direccion"];
$tpago = $_POST["tpago"];
$ntarjeta = $_POST["ntarjeta"];
//CONSULTA PARA INSERTAR
if ($ntarjeta =""){
    $insertar = "INSERT INTO pago(nombre,direccion,tpago) VALUES ('$nombre','$direccion','$tpago')";
}else{
    $insertar = "INSERT INTO pago(nombre,direccion,tpago,ntarjeta) VALUES ('$nombre','$direccion','$tpago','$ntarjeta')";
}
//EJECUTAR CONSULTA
$realizacion = mysqli_query($conexion,$insertar);

if ($realizacion){
    header("location: ../pago_registrado.html");
}else{
    echo 'Pago No Registrado';
}
//CERRAR CONEXIÓN
mysqli_close($conexion);

?>