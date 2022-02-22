<?php
include 'cn.php';
//RECIBIR LOS DATOS Y ALMACENAR EN VARIABLES
$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];
$precio = $_POST["precio"];
$categoria = $_POST["id_categoria"];
$imagen = addslashes(file_get_contents($_FILES["imagen"]["tmp_name"]));

//CONSULTA PARA INSERTAR
$insertar = "INSERT INTO plato(nombre,descripcion,precio,id_categoria,imagen) VALUES ('$nombre','$descripcion','$precio','$categoria','$imagen')";

//EJECUTAR CONSULTA
$resultado = mysqli_query($conexion,$insertar);

if($resultado){
    header('location: ../plato.php');
}else{
    echo 'Plato No registrado';
}

//CERRAR CONEXIÓN
mysqli_close($conexion);

?>