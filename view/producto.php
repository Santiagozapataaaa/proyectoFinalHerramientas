<?php
//Header
include('./view/layouts/header.php');
?>
<?php

if (isset($_POST["btn-producto"])) {
    $file = $_FILES["file-upload"]["name"]; //Nombre de nuestro archivo

    $validator = 1; //Variable validadora

    $file_type = strtolower(pathinfo($file, PATHINFO_EXTENSION)); //Extensión de nuestro archivo

    $url_temp = $_FILES["file-upload"]["tmp_name"]; //Ruta temporal a donde se carga el archivo 

    //dirname(__FILE__) nos otorga la ruta absoluta hasta el archivo en ejecución
    $url_insert = dirname(__FILE__) . "/files"; //Carpeta donde subiremos nuestros archivos

    //Ruta donde se guardara el archivo, usamos str_replace para reemplazar los "\" por "/"
    $url_target = str_replace('\\', '/', $url_insert) . '/' . $file;

    //Si la carpeta no existe, la creamos
    if (!file_exists($url_insert)) {
        mkdir($url_insert, 0777, true);
    };

    //Validamos el tamaño del archivo
    $file_size = $_FILES["file-upload"]["size"];
    if ($file_size > 2000000) {
        echo "El archivo es muy pesado";
        $validator = 0;
    }

    //Validamos la extensión del archivo
    if ($file_type != "jpg" && $file_type != "jpeg" && $file_type != "png" && $file_type != "gif") {
        echo "Solo se permiten imágenes tipo JPG, JPEG, PNG & GIF";
        $validator = 0;
    }

    //movemos el archivo de la carpeta temporal a la carpeta objetivo y verificamos si fue exitoso
    if ($validator == 1) {
        if (move_uploaded_file($url_temp, $url_target)) {
            echo "El archivo " . htmlspecialchars(basename($file)) . " ha sido cargado con éxito.";
        } else {
            echo "Ha habido un error al cargar tu archivo.";
        }
    } else {
        echo "Error: el archivo no se ha cargado";
    }
}

//FORMULARIO
?>

<div id="maxi-container">
    <form action="./producto.php" method="post" enctype="multipart/form-data" target="_blank" id="form_producto">
        <div id="product-content">
            <input class="form-control" type="text" placeholder="Nombre del producto" aria-label="default input example" id="producto" name="producto">
        </div>

        <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="tipo" name="tipo">
            <option selected>Tipo de producto</option>
            <option value="1">Camiseta</option>
            <option value="2">Pantaloneta</option>
            <option value="3">Buzo</option>
            <option value="3">Sudadera</option>
            <option value="3">Buzo</option>
            <option value="3">Gorra</option>
            <option value="3">Gafas</option>
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


<?php
//Footer
include('./view/layouts/footer.php');
?>