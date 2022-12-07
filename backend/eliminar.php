<?php 
    include "../backend/conexion.php";
    $conexion = conexion();
    $id = $_GET['idp'];
    $sql = "DELETE FROM t_examen WHERE id='$id'";
    $respuesta = mysqli_query($conexion,$sql);

    if($respuesta){
        header('location:../vistas/index.php');
    }else{
        echo 'No se puede Eliminar';
    }
?>
