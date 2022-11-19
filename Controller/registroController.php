<?php
require_once("./model/registrarModel.php");
class registroController
{
    static function index()
    {
        include './view/login.php';
    }

    static function registro()
    {
        if (isset($_POST['registrar'])) {
            $nombre = htmlspecialchars($_POST['nombre']);
            $apellido = htmlentities($_POST['apellido']);
            $tipoDoc = htmlentities($_POST['tipoDoc']);
            $doc = htmlentities($_POST['doc']);
            $email = htmlentities($_POST['email']);
            $rol = htmlentities(1);
            $passwd = password_hash($_POST['passwd'], PASSWORD_DEFAULT, [15]);
        }

        $datos = [$nombre, $apellido, $tipoDoc, $doc, $email, $rol, $passwd];
        $registro = new registroModelo();

        $result = $registro->registrar("tblusuarios", $datos);

        if ($result == true) {
            header('location: ../iniciar_sesion');
            die();
        } else {
            header('location: ../iniciar_sesion');
            die();
        }
    }
}
