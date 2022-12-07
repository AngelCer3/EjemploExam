<?php 
    include "../vistas/header.php";
    include "../backend/conexion.php";

    $conexion = conexion();
    $id = $_GET['idp'];
    $sql = "SELECT * FROM t_examen WHERE id='$id'";
    $respuesta = mysqli_query($conexion, $sql);
    $item =  mysqli_fetch_array($respuesta);
?>

<div class="container">
        <div class="row">
            <div class="col">
                <div class="card mt-4">
                    <div class="card-body">
                        <form action="../backend/editar.php" method="POST" enctype="multipart/form-data">
                            <input type="text" name="id" value="<?php echo $id; ?>" hidden>
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $item['nombre'] ?>">
                            <br>
                            <label for="edad">Edad</label>
                            <input type="number" name="edad" id="edad" class="form-control" value="<?php echo $item['edad']?>">
                            <br>
                            <label for="url">SignoZodiacal</label>
                            <input type="url" name="url" id="url" class="form-control" value="<?php echo $item['signoZodiaco'] ?>">
                            <button class="btn btn-success">Editar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>    


<?php include "../vistas/footer.php" ?>