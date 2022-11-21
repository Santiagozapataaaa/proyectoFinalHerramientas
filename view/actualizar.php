<?php
include('./view/layouts/header.php');
?>
<!-- Contenido -->

<div class="container content-actualizar">
    <div class="row justify-content-center">
        <div class="col-lg-6 actualizar">
            <form action="producto/actualizar?id=<?php echo $_GET['id'] ?>" method="post" enctype="multipart/form-data" id="form_producto">
                <input type="text" class="form-control" name="id" value="<?php echo $_GET['id'] ?>" disabled>
                <div class="row">
                    <div id="" class="col-lg-6 mb-3">
                        <input class="form-control" type="text" name="producto" value="<?php echo $_GET['nombre']?>">
                    </div>
                    <div class="col-lg-6 mb-3">
                        <select class="form-select " id="" name="tipo">
                            <option selected>Tipo de producto</option>
                            <option value="Camiseta">Camiseta</option>
                            <option value="Pantaloneta">Pantalona</option>
                            <option value="Buzo">Buzo</option>
                            <option value="Sudadera">Sudadera</option>
                            <option value="Gorra">Gorra</option>
                            <option value="Gafas">Gafas</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div id="" class="col-lg-6 mb-3">
                        <input class="form-control" id="cantidad" type="text" name="cantidad" value="<?php echo $_GET['cant']?>">
                    </div>
                    <div id="" class="col-lg-6 mb-3">
                        <input class="form-control" id="precio" type="text" name="precio" value="<?php echo $_GET['precio'] ?>">
                    </div>
                </div>
                <div class="row">
                    <div id="" class="col mb-3">
                        <input type="text" class="form-control" name="descripcion" value="<?php echo $_GET['descrip'] ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <input class="form-control" name="file-upload" id="file-upload" type="file" accept="image/*">
                    </div>
                </div>
                <div class="row">
                    <div>
                        <button type="submit" class="btn btn-primary" id="btn-producto" name="actualizar">Actualizar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Contenido -->
<?php
include('./view/layouts/footer.php');
?>