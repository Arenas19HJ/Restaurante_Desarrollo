<?php
    include("cn.php");
    session_start();
    $id_usuario=$_SESSION['id_usuario'];
    $id_plato = $_POST["id_plato"];
    $cantidad= $_POST["cantidad"];
    $editar_carta= mysqli_query($conexion,"UPDATE carrito SET cantidad='$cantidad' WHERE (id_plato= '$id_plato' AND id_usuario='$id_usuario') ");
    if($editar_carta){
        header("location: ../carrito.php");
    }else{
        echo "Error al editar";
}
?>