<?php
include './model/recuperarModel.php';
class recuperarController
{

    static function index()
    {
        include './view/recuperar.php';
    }

    static function recuperacion()
    {
        if (isset($_POST['recuperar'])) {
            $correo = $_POST['correo'];
            $doc = $_POST['doc'];
            $newPasswd = password_hash($_POST['passwd'], PASSWORD_DEFAULT, [15]);

            $datos = [$newPasswd, $correo, $doc];
            $recuperar = new recuperModelo();

            $result = $recuperar->recuperar('tblusuarios', $datos);

            if ($result) {
                header('location: ../iniciar_sesion');
            } else {
                header('location: ../recuperar');
            }
        }
    }
}
