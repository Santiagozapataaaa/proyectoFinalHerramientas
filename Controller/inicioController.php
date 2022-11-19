<?php
    require_once('./model/inicioModel.php');

    class inicioController{
        // private $model;
        // function __construct()
        // {
        //     $this->model = new inicioModelo();
        // }

        // mostrar
        static function index()
        {
            $productos = new inicioModelo();
            $datos = $productos->mostrar('tblproductos');
            
            require_once ('./view/inicio.php');
        }

        static function salir()
        {
            session_start();

            unset($_SESSION['userRol']);

            session_destroy();

            header('location: ../inicio');
        }
    }