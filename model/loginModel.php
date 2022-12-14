<?php
    class loginModelo {
        private $Modelo;
        private $conn;

        public function __construct()
        {
            $this->Modelo = array();
            include './controller/conexionController.php';
            $this->conn = new Conexion();
        }
        
        public function consultar($tabla,$datos)
        {
            $clave = htmlentities($datos[1]);

            $this->conn -> beginTransaction();
            try{
                $sql = "SELECT count(*) as conteo, strPassword, tblroles.strNombre_rol as Rol FROM ".$tabla." INNER JOIN tblroles where numId_Rol = tblroles.id and strCorreo = '".$datos[0]."'";
                $consulta = $this->conn->prepare($sql);
                $consulta->execute();
                $this->conn->commit();

                $user = $consulta->fetchAll(PDO::FETCH_ASSOC);

                if($user[0]["conteo"]>0){
                    if(password_verify($clave, $user[0]['strPassword'])){
                        session_start();
                        $_SESSION["userRol"] = $user[0]["Rol"];
                        return true;
                    }else{
                        return false;
                    }
                }
            }catch(PDOException $e ){
                $this->conn -> rollback();
                echo "No se pudo realizar la consulta".$e->getMessage();
                exit();
            }
            exit();
        }
    }