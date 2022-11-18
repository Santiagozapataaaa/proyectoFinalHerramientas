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
        
        public function consultar()
        {
            
        }
    }