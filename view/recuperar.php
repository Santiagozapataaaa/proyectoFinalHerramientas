<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./view/img/fenrir.ico" type="image/x-icon">
    <link rel="stylesheet" href="./view/css/recuperar.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Recuperar Contraseña</title>
</head>
<body>
<form action="" method="POST" id="contenedor">
    <div class="contenido">
        <div class="mb-3">
            <h2>Cambiar contraseña</h2>
            <input type="email" class="form-control" placeholder="Correo con el cual se registro" name="mail">
        </div>
        <div class="mb-3">
            <input type="number" class="form-control" placeholder="Cedula con la cual se registro" name="doc">
        </div>
        <div class="mb-3">
            <input type="password" class="form-control" placeholder="Contraseña nueva" name="rvalidation_pass">
        </div>
        <div class="mb-3">
            <input type="password" class="form-control" placeholder="Confirme la nueva contraseña" name="rvalidation_pass">
        </div>
        <button type="submit" class="btn btn-primary">Cambiar contraseña</button>
        </form>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>