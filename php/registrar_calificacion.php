<?php
include 'cn.php';
//RECIBIR LOS DATOS Y ALMACENAR EN VARIABLES
$calificacion = $_POST["calificacion"];
$comentario = $_POST["comentario"];

//CONSULTA PARA INSERTAR
$insertar = "INSERT INTO calificacion (calificacion,comentario) VALUES ('$calificacion','$comentario')";

//EJECUTAR CONSULTA
$resultado = mysqli_query($conexion,$insertar);

if($resultado){
    header('location: ../index.html');
}else{
    echo 'calificacion No registrada';
}

//CERRAR CONEXIÓN
mysqli_close($conexion);

?>