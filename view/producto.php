<?php
//Header
include('./view/layouts/header.php');
?>

<form action="./producto.php" method="get" enctype="multipart/form-data" target="_blank" class="form_producto">
    <input class="form-control" type="text" placeholder="Nombre del producto" aria-label="default input example" name="producto">
    <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="tipo">
        <option selected>Tipo de producto</option>
        <option value="1">Camiseta</option>
        <option value="2">Pantaloneta</option>
        <option value="3">Buzo</option>
        <option value="3">Sudadera</option>
        <option value="3">Buzo</option>
        <option value="3">Gorra</option>
        <option value="3">Gafas</option>
    </select>
    <div class="descripcion" name="descripcion">
        <label for="exampleFormControlTextarea1" class="form-label">Descripcón del producto</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descripcion"></textarea>
    </div>

    <div id="divInputLoad">
        <div id="divFileUpload">
            <input class="form-control" id="file-upload" type="file" accept="image/*">
        </div>
        <div id="file-preview-zone">
        </div>
    </div>

    <div class="btn-container">
        <button type="submit" class="btn btn-primary" name="btn-producto">CREAR PRODUCTO</button>
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

<?php
//Footer
include('./view/layouts/footer.php');
?>