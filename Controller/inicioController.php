<?php
    require_once('./model/inicioModel.php');

    class modeloController{
        private $model;
        function __construct()
        {
            $this->model = new Modelo();
        }

        // mostrar
        static function index()
        {
            // $producto = new Modelo();
            // $datos = $producto->mostrar('productos','1');

            include './view/inicio.php';
        }
    }