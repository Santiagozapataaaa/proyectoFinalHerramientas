<?php
//Header
include('./view/layouts/header.php');
?>

    <form action="./producto.php" method="post" enctype="multipart/form-data" name="nuevo_producto" target="_blank">

        <input class="form-control" type="text" placeholder="Nombre del producto" aria-label="default input example">
        <input class="form-control" type="text" placeholder="Tipo del producto" aria-label="default input example">
        <div class="descripcion">
            <label for="exampleFormControlTextarea1" class="form-label">Descripcón del producto</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="archivo">
            <input type="file" name="archivosubido">
            <input type="submit" value="Enviar datos">
        </div>
    </form>

<?php
//Footer
include('./view/layouts/footer.php');
?>