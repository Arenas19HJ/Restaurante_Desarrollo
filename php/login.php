<?php
include("cn.php");
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
$consulta="SELECT * FROM usuario WHERE nombre='$usuario' and clave='$clave'";
session_start();
$filas="SELECT * FROM pedido";
$resu=mysqli_query($conexion,$filas);
$_SESSION['id_pedido']=mysqli_num_rows($resu)+1;
$_SESSION['id_usuario']=mysqli_query($conexion,"SELECT id_usuario FROM usuario WHERE nombre='$usuario' and clave='$clave'");
$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado);
if($filas>0){
      header("location:../index.html"); 
}else{
    echo "Error en la autenticación";
}

?>