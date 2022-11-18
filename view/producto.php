<?php
//Header
include('./view/layouts/header.php');
?>

<div class="container">
    <div class="row">
        <div class="col producto">
            <form action="" method="post" enctype="multipart/form-data" target="_blank">
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
        </div>
    </div>
</div>

<?php
//Footer
include('./view/layouts/footer.php');
?>