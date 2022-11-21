<?php

class recuperModelo
{
    private $conn;

    public function __construct()
    {
        include './controller/conexionController.php';
        $this->conn = new Conexion();
    }

    public function recuperar($tabla, $datos)
    {
        $fecha = date('Y-m-d');
        $this->conn->beginTransaction();
        try {
            $sql = "UPDATE {$tabla} SET strPassword='{$datos[0]}', datFecha_actualizacion = '{$fecha}' where {$tabla}.strCorreo = '{$datos[1]}' and {$tabla}.numDocumento = {$datos[2]}";
            $consulta = $this->conn->prepare($sql);

            if ($consulta->execute()) {
                $this->conn->commit();
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            $this->conn->rollback();
            echo "No se pudo realizar la consulta" . $e->getMessage();
            exit();
        }
        exit();
    }
}
