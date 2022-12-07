<?php
    include "../backend/conexion.php";
    $conexion = conexion();
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $signo = $_POST['url'];

    $sql = "INSERT INTO t_examen (nombre,edad,signoZodiaco) VALUES ('$nombre','$edad', '$signo')";
    $respuesta = mysqli_query($conexion,$sql);

    if($respuesta){
        header('location:../vistas/index.php');
    }else{
        echo 'No existe ese signo';
    }
?>