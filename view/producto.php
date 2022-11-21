<?php
//Header
include('./view/layouts/header.php');
?>

<div class="container-fluid">
    <div class="row">
        <div id="title-container">
            <h2 id="titulo-p"><i>PRODUCTOS</i></h2>
        </div>
        <div class="col formulario">
            <div class="row maxi-container">
                <div class="col-lg-7">
                    <form action="producto/enviar" method="post" enctype="multipart/form-data" id="form_producto">
                        <div class="row">
                            <div id="" class="col-lg-6 mb-3">
                                <input class="form-control" type="text" placeholder="Nombre del producto" id="producto" name="producto">
                            </div>
                            <div class="col-lg-6 mb-3">
                                <select class="form-select " aria-label=".form-select-sm example" id="" name="tipo">
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
                                <input class="form-control" id="cantidad" type="text" placeholder="Cantidad" aria-label="default input example" name="cantidad">
                            </div>
                            <div id="" class="col-lg-6 mb-3">
                                <input class="form-control" id="precio" type="text" placeholder="Precio" name="precio">
                            </div>
                        </div>
                        <div class="row">
                            <div id="" class="col mb-3">
                                <input type="text" class="form-control" name="descripcion" placeholder="Descripcion">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <input class="form-control" name="file-upload" id="file-upload" type="file" accept="image/*">
                            </div>
                        </div>
                        <div class="row">
                            <div>
                                <button type="submit" class="btn btn-primary" id="btn-producto" name="btn-producto">CREAR PRODUCTO</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4" id="file-preview-zone">

                </div>
            </div>
        </div>
    </div>

    <div class="col tabla-productos">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Imagen</th>
                    <th>Producto</th>
                    <th>Tipo</th>
                    <th>Descripcion</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Eliminar</th>
                    <th>Actualizar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($datos as $key => $value) { // almaceno en un array la consulta y la condiciono en un while para que me muestre la informacion mientras hayan datos en el array
                ?>
                    <tr>
                        <th><?php echo $value['id'] ?></th>
                        <th><img src="<?php echo $value['strRuta'] ?>" alt="Imagen del producto"></th>
                        <th><?php echo $value['strProducto'] ?></th> <!-- inserto php y le digo a datos que me muestre lo de la colmna correspondiente mostrara datos a medida que vaya leyendo la informacion -->
                        <th><?php echo $value['strTipo'] ?></th>
                        <th><?php echo $value['strDescripcion'] ?></th>
                        <th><?php echo $value['intPrecio'] ?></th>
                        <th><?php echo $value['intCantidad'] ?></th>
                        <th><a href="producto/eliminar?id=<?php echo $value['id']; ?>&archivo=<?php echo $value['strRuta']; ?>" class="btn btn-primary">Eliminar</a></th>
                        <th><a href="actualizar?id=<?php echo $value['id'] ?>&ruta=<?php echo $value['strRuta'] ?>&nombre=<?php echo $value['strProducto'] ?>&tipo=<?php echo $value['strTipo'] ?>&descrip=<?php echo $value['strDescripcion'] ?>&precio=<?php echo $value['intPrecio'] ?>&cant=<?php echo $value['intCantidad'] ?>" class="btn btn-primary">Actualizar</a></th>
                    </tr>

                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php
//Footer
include('./view/layouts/footer.php');
?>