<?php
    require_once("./model/loginModel.php");
    class loginController{

        static function index(){
            include './view/login.php';
        }

        static function login(){
            if(isset($_POST["enviar"]))
            {
                $usuario = $_POST["usuario"];
                $password = $_POST["password"];
                $consulta = new loginModelo();
                $datos = [$usuario, $password];

                $result = $consulta->consultar("tblusuarios", $datos);
                if ($result)
                {
                    
                    include ("./view/inicio.php");
                }
            }
        }
    }