<?php
$conexion = mysqli_connect("localhost","root","","bd_rstaurante");


if(!$conexion) {
    echo 'Error al conectar a la base de datos';
}

