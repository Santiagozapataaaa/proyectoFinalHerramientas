<?php
    class loginModelo {
        private $modelo;
        private $conn;

        public function __construct()
        {
            $this->Modelo = array();
            include './controller/conexionController.php';
            $this->conn = $db;
        }
        
        public function consultar($tabla,$datos)
        {
            $sql = 'SELECT strpassword, numid_rol FROM '.$tabla. ' where strcorreo= "'.$datos[0].'"';
            $consulta = mysqli_prepare($this->conn,$sql);
            mysqli_stmt_execute($consulta);
            mysqli_stmt_bind_result($consulta,$pass,$rol);

            if(mysqli_stmt_fetch($consulta)){
                $consulta->close();
                if($datos[1]==$pass){
                    session_start();
                    $_SESSION["rol"] = $rol;
                    return true;
                    
                }
                else false;
            }
            else
            {
                return false;
            }
        }
    }