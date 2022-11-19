<?php
    
    class registroModelo{
        private $conn;

        public function __construct()
        {
            include './controller/conexionController.php';
            $this->conn = new Conexion();
        }

        public function registrar($tabla, $datos){
            $this->conn->beginTransaction();
            try {
                $sql = "insert into {$tabla} (strNombre, strApellido, strTipo_Documento, numDocumento, strCorreo, numId_Rol, strPassword)
                        value('{$datos[0]}','{$datos[1]}','{$datos[2]}','{$datos[3]}','{$datos[4]}','{$datos[5]}', '{$datos[6]}')";
                
                $insert = $this->conn->prepare($sql);

                if ($insert->execute()) {
                    $this->conn->commit();
                    return true;
                }
            } catch (Exception $e) {
                $this->conn->rollBack();
                echo "Error: ". $e->getMessage();
                exit();
            }
            exit();
        }
    }