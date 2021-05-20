<?php

    require_once '../Models/Conexion.php';
    require_once '..Models/M_rol.php';

    class RolesDAO{
        public static function ListarDatos(){
            $conn = new Conexion();

            $cont = $conn->ejecutarConsulta("SELECT * FROM rol");

            $conn->cerrarConexion();

            return $cont;
        }

        public static function ingresarDato ($rol){
            $conn = new Conexion();

            $conn->ejecutarActualizacion("INSERT INTO rol (nombre) VALUES ('" . $rol->nombre . "')");

            $conn->cerrarConexion();
        }

        public static function buscarPorid ($id){
            $conn = new Conexion();

            $cont = $con->ejecutarConsulta("SELECT * FROM rol WHERE id = $id");

            $con->cerrarConexion();

            return $cont[0];
        }

        public static function editarDato($rol){
            $conn = new Conexion();

            $con->ejecutarActualizacion("UPDATE rol SET nombre = '" . $rol->nombre . "' WHERE id = " . $rol->id);

            $con->cerrarConexion();

        }

        public static function eliminarPorid($id){
            $conn = new Conexion();

            $con->ejecutarActualizacion("DELETE FROM rol WHERE id = $id");

            $con->cerrarConexion();
        }
    }
?>