<?php
    include "../vistas/header.php";
    include "../backend/conexion.php";

    $conexion = conexion();
    $sql = "SELECT * FROM t_examen";
    $respuesta = mysqli_query($conexion,$sql);
?>   
    <a class="btn btn-primary" href="../vistas/agregar.php" role="button">Agregar nuevo registro</a>

    <table border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Edad</th>
                <th>Signo Zodiacal</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($ver= mysqli_fetch_array($respuesta)): ?>
            <tr>
                <td><?php echo $ver['id']; ?></td>
                <td><?php echo $ver['nombre']; ?></td>
                <td><?php echo $ver['edad']; ?></td>
                <td><img src="<?php echo $ver['signoZodiaco'];?>" alt="" width="100px"></td>
                <td><a href="./editar.php?idp=<?php echo $ver['id']; ?>"><button class="btn btn-primary">Editar</button></a></td>
                <td><a href="../backend/eliminar.php?idp=<?php echo $ver['id']; ?>"><button class="btn btn-danger">Eliminar</button></a></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>


<?php include "../vistas/footer.php" ?>
