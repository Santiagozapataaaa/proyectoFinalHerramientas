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

        public function mostrar($tabla)
        {
            $sql = 'select * from '.$tabla;
            $consulta = mysqli_prepare($this->conn, $sql);

            mysqli_stmt_execute($consulta);

            $resultado = mysqli_stmt_bind_result($consulta, $descripcion, $valor, $ruta);

            if (mysqli_stmt_fetch($consulta))
            {
                $consulta->close();
                return $resultado;
            }else{
                $consulta->close();
                return $resultado;
            }
        }

    }