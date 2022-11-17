<?php
    class Modelo {
        private $modelo;
        private $conn;

        public function __construct()
        {
            $this->Modelo = array();
            include './controller/conexionController.php';
            $this->conn = $db;
        }

        public function insertar($tabla, $datos)
        {
            $consulta = 'insert into'.$tabla.' values('.$datos.')';
            $resultado = $this->conn->query($consulta);

            if ($resultado)
            {
                return true;
            }else{
                return false;
            }
        }

        public function mostrar()
        {
            
        }

        public function actualizar()
        {

        }
    }