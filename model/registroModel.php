<?php
    class inicioModelo {
        private $modelo;
        private $conn;

        public function __construct()
        {
            $this->Modelo = array();
            include './controller/registroController.php';
            $this->conn = $db;
        }
    }