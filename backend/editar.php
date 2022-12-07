<?php 
    include "../backend/conexion.php";
    $conexion = conexion();

    $id= $_POST['id'];
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $signo = $_POST['url'];
    $sql = "UPDATE t_examen SET nombre = '$nombre', edad = '$edad', signoZodiaco = '$signo' Where id='$id'";
    $respuesta = mysqli_query($conexion, $sql);

    if($respuesta){
        header('location:../vistas/index.php');
    }else{
        echo 'No se puede actualizar';
    }
?>