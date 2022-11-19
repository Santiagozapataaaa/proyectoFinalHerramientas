<?php
//Header
include('./view/layouts/header.php');
?>

<div id ="title-container">
    <h2  id="titulo-p"><i>PRODUCTOS</i></h2>
</div>

<div id="maxi-container">
    <form action="producto/enviar" method="post" enctype="multipart/form-data" id="form_producto">
        <div id="product-content">
            <input class="form-control" type="text" placeholder="Nombre del producto" aria-label="default input example" id="producto" name="producto">
        </div>
        <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="tipo" name="tipo">
            <option selected>Tipo de producto</option>
            <option value="Camiseta">Camiseta</option>
            <option value="Pantaloneta">Pantalona</option>
            <option value="Buzo">Buzo</option>
            <option value="Sudadera">Sudadera</option>
            <option value="Gorra">Gorra</option>
            <option value="Gafas">Gafas</option>
        </select>
        <div id="cantidad-content">
            <input class="form-control" id="cantidad" type="text" placeholder="Cantidad" aria-label="default input example" name="cantidad">
        </div>
        <div name="descripcion" id="decripcion-container">
            <textarea class="form-control" id="descripcion" rows="3" name="descripcion"></textarea>
        </div>
        <div id="precio-content">
            <input class="form-control" id="precio" type="text" placeholder="Precio" aria-label="default input example" name="precio">
        </div>
        <div id="divInputLoad">
            <div id="divFileUpload">
                <input class="form-control" name="file-upload" id="file-upload" type="file" accept="image/*">
            </div>
        </div>
        <div id="btn-content">
            <button type="submit" class="btn btn-primary" id="btn-producto" name="btn-producto">CREAR PRODUCTO</button>
        </div>

        <script>
            function readFile(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        var filePreview = document.createElement('img');
                        filePreview.id = 'file-preview';
                        //e.target.result contents the base64 data from the image uploaded
                        filePreview.src = e.target.result;
                        console.log(e.target.result);

                        var previewZone = document.getElementById('file-preview-zone');
                        previewZone.appendChild(filePreview);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }

            var fileUpload = document.getElementById('file-upload');
            fileUpload.onchange = function(e) {
                readFile(e.srcElement);
            }
        </script>
    </form>
    <div id="file-preview-zone">
    </div>

</div>

<div class="tabla-productos">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Producto</th>
                        <th>Tipo</th>
                        <th>Descripcion</th>
                        <th>Precio</th>
                        <th>Cantidd</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($datos = mysqli_fetch_array($resultado)) { // almaceno en un array la consulta y la condiciono en un while para que me muestre la informacion mientras hayan datos en el array
                    ?>

                        <tr>
                            <th><?php echo $datos['id'] ?></th>
                            <th><?php echo $datos['strProducto'] ?></th> <!-- inserto php y le digo a datos que me muestre lo de la colmna correspondiente mostrara datos a medida que vaya leyendo la informacion -->
                            <th><?php echo $datos['strTipo'] ?></th>
                            <th><?php echo $datos['strDescripcion'] ?></th>
                            <th><?php echo $datos['intPrecio'] ?></th>
                            <th><?php echo $datos['intCantidad'] ?></th>
                        </tr>

                    <?php
                    }
                    ?>
                </tbody>
            </table>

        </div>


<?php
//Footer
include('./view/layouts/footer.php');
?>