<?php
include 'cn.php';
//RECIBIR LOS DATOS Y ALMACENAR EN VARIABLES
$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];

//CONSULTA PARA INSERTAR
$insertar = "INSERT INTO categorias(nombre_categoria,descripcion_categoria) VALUES ('$nombre','$descripcion')";

//EJECUTAR CONSULTA
$resultado = mysqli_query($conexion,$insertar);

if($resultado){
    header('location: ../categorias.php');
}else{
    echo 'Categoria No registrado';
}

//CERRAR CONEXIÓN
mysqli_close($conexion);

?>