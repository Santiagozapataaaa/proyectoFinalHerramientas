<?php 

    class Conexion extends PDO {
        private $host = "localhost";
        private $data_base = "dbo.fenrir";
        private $usuario = "root";
        private $clave = "";

        public function __construct(){
            try{
                parent::__construct("mysql:host=".$this->host.";dbname=".$this-> data_base.";charset=utf8",$this->usuario,$this->clave,array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
            }catch(PDOException $e){
                echo "Error de conexion con la base de datos".$e->getMessage();
                exit;
            }
        }
    }

    // define('HOST', 'localhost');
    // define('USER', 'root');
    // define('PASSWORD', '');
    // define('DB_NAME', 'dbo.fenrir');

    // try {
    //     $db = mysqli_connect(HOST,USER,PASSWORD,DB_NAME);
    // } catch (Exception $e) {
    //     echo "ERROR: " . $e->getMessage();
    // }
