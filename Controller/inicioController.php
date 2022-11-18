<?php
    require_once('./model/inicioModel.php');

    class inicioController{
        private $model;
        function __construct()
        {
            $this->model = new inicioModelo();
        }

        // mostrar
        static function index()
        {
            // $producto = new inicioModelo();
            // $datos = $producto->mostrar('productos','1');

            include './view/inicio.php';
        }
    }