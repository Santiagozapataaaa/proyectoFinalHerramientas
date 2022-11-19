<?php
class inicioModelo
{
    private $inicioModelo;
    private $conn;

    public function __construct()
    {
        $this->inicioModelo = array();
        include './controller/conexionController.php';
        $this->conn = new Conexion();
    }

    public function mostrar($tabla)
    {

        $this->conn->beginTransaction();
        try {
            $sql = "SELECT * from " . $tabla . " where 1";
            $consulta = $this->conn->prepare($sql);
            $consulta->execute();
            $this->conn->commit();

            $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);

            if (!empty($resultado)) {
                return $resultado;
            }
            else{
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
