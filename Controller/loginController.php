<?php
require_once("./model/loginModel.php");
class loginController
{
    // private $model;
    // private $view;


    // public function __construct()
    // {
    //     $this->model = new loginModelo();
    // }

    static function index()
    {
        include './view/login.php';
    }

    static function login()
    {
        if(isset($_POST['enviar']))
        {
            $usuario = $_POST['usuario'];
            $password = $_POST['password'];
        }

        $datos = [$usuario, $password];
        $consulta = new loginModelo();

        $result = $consulta->consultar("tblusuarios", $datos);

        if ($result) {
            header('location: ../inicio');
            die();
        } else {
            header('location: ../iniciar_sesion');
            die();
        }
    }
}