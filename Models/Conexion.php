<?php

    class Conexion {

        private $servidor;
        private $usuario;
        private $password;
        private $database;
        private $conn;

        public function __construct()
        {
            $this->servidor = "localhost";
            $this->servidor = "root";
            $this->password = "";
            $this->database = "roles";
            
            $this->conn = new mysqli($this->servidor, $this->usuario, $this->password, $this->database);
        }

        
        public function ejecutarConsulta($sql){
            $query = $this-> conn->query($sql);

            return $query->fetch_all();
            
        }

        public function ejecutarActualizacion($sql){
            $this->conn->query($sql);
        }

        public function cerrarConexion(){
            $this->conn->close();
        }
    }
?>