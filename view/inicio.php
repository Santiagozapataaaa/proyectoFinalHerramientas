<?php
include('./view/layouts/header.php');
// Contenido
?>
<div class="container">
    <div class="row">
        <div class="col contenido">
            <?php
            if (!empty($datos)) {
                foreach($datos as $key => $value) {
            ?>
                    <div class="col">
                        <div class="col-lg-3 item-content">
                            <div>
                                <img src="<?php echo $value['strRuta']; ?>" alt="">
                            </div>
                            <p id="nomProduct"><?php echo $value['strProducto']; ?></p>
                            <p><?php echo $value['intPrecio']; ?></p>
                        </div>
                        <div class="col-lg-3 item-content">
                            <div>
                                <img src="<?php echo $value['strRuta']; ?>" alt="">
                            </div>
                            <p class="nomProduct"><?php echo $value['strProducto']; ?></p>
                            <p><?php echo $value['intPrecio']; ?></p>
                        </div>
                        <div class="col-lg-3 item-content">
                            <div>
                                <img src="<?php echo $value['strRuta']; ?>" alt="">
                            </div>
                            <p class="nomProduct"><?php echo $value['strProducto']; ?></p>
                            <p><?php echo $value['intPrecio']; ?></p>
                        </div>
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </div>
</div>

<?php
// Contenido
include('./view/layouts/footer.php');
?>