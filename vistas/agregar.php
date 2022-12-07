<?php
    include "../vistas/header.php";
?>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card mt-4">
                    <div class="card-body">
                        <form action="../backend/agregar.php" method="POST" enctype="multipart/form-data">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" id="nombre" class="form-control">
                            <br>
                            <label for="edad">Edad</label>
                            <input type="number" name="edad" id="edad" class="form-control">
                            <br>
                            <label for="url">SignoZodiacal</label>
                            <input type="url" name="url" id="url" class="form-control">
                            <button class="btn btn-success">Agregar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>    

<?php include "../vistas/footer.php" ?>;