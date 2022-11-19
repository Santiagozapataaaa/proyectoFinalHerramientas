<?php
include('./view/layouts/header.php');
// Contenido
?>
<div class="container">
    <div class="row">
        <div class="col contenido">
            <div class="row">
                <?php
                if (!empty($datos)) {
                    foreach ($datos as $key => $value) {
                ?>

                        <div class="col-lg-4 item-content">
                            <div>
                                <img src="<?php echo $value['strRuta']; ?>" alt="">
                            </div>
                            <p id="nomProduct"><?php echo $value['strProducto']; ?></p>
                            <p><?php echo $value['intPrecio']; ?></p>
                        </div>

                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>

<?php
// Contenido
include('./view/layouts/footer.php');
?>