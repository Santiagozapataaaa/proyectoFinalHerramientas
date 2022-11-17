<?php
    class inicioModelo {
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
            $sql = 'insert into '.$tabla.' values('.$datos.')';
            $consulta = mysqli_prepare($this->conn, $sql);

            mysqli_stmt_execute($consulta);

            if (mysqli_stmt_fetch($consulta))
            {
                $consulta->close();
                return true;
            }else{
                $consulta->close();
                return false;
            }
        }

        public function mostrar($tabla, $datos)
        {
            $sql = 'select * from ? where ? = ?';
        }

        public function actualizar()
        {

        }
    }