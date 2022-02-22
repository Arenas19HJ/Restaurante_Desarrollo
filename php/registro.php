<?php
include 'cn.php';
//RECIBIR LOS DATOS Y ALMACENAR EN VARIABLES
$nombre = $_POST["usuario"];
$clave = $_POST["clave"];
//CONSULTA PARA INSERTAR
$insertar = "INSERT INTO usuario(nombre,clave) VALUES ('$nombre','$clave')";

//EJECUTAR CONSULTA
$resultado = mysqli_query($conexion,$insertar);

if($resultado){
    header('location: ../loginD.html');
}else{
    echo 'Usuario No registrado';
}

//CERRAR CONEXIÓN
mysqli_close($conexion);

?>