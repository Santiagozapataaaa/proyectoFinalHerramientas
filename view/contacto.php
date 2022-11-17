<?php
include('./view/layouts/header.php');
// Contenido
?>
<div class="container content-contact">
    <div class="row justify-content-center">
        <div class="col-lg-6 contacto">
            <form action="" method="post">
                <div class="row ">
                    <div class="col-lg-6 mb-3">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" class="form-control" name="nombre" id="mailName" placeholder="Juan Carlos">
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="correo" class="form-label">Correo:</label>
                        <input type="email" class="form-control" name="correo" id="email" placeholder="name@example.com">
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="asunto" class="form-label">Asunto:</label>
                        <input type="email" class="form-control" id="mailSubject" placeholder="">
                    </div>
                </div>
                <div class=" col mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Mensaje:</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

                <button class="btn btn-success">Enviar</button>
            </form>
        </div>
    </div>
</div>

<?php
// Contenido
include('./view/layouts/footer.php');
?>