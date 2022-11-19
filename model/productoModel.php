<?php
    class productoModelo {
        private $modelo;
        private $conn;

        public function __construct()
        {
            $this->Modelo = array();
            include './controller/conexionController.php';
            $this->conn = new Conexion();
        }
        
        public function registrar($tabla,$datos)
        {
            $clave = htmlentities($datos[1]);

            $this->conn -> beginTransaction();
            try{
                $sql = "INSERT INTO ".$tabla." (strProducto,strTipo,strDescripcion,intPrecio,intCantidad,strRuta) value('{$datos[0]}','{$datos[1]}','{$datos[2]}','{$datos[3]}','{$datos[4]}','{$datos[5]}')";
                $consulta = $this->conn->prepare($sql);

                if($consulta->execute()){
                    $this->conn->commit();
                    return true;
                }
            }catch(PDOException $e ){
                $this->conn -> rollback();
                echo "No se pudo realizar la consulta".$e->getMessage();
                exit();
            }
            exit();
        }

        public function store($tabla){
            $sql = 'select * from '.$tabla;
            $consulta = $this->conn->prepare($consulta);

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
