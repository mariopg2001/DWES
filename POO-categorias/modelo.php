<?php
    class Modelo{
        public function mostrar($sql){
            $conexion = new conectar();
            $conexion = $conexion->conexion();

            $result = mysqli_query($conexion, $sql);

            return mysqli_fetch_all($result, MYSQLI_ASSOC);
        }

        public function alta($nombre){
            $conexion = new conectar();
            $conexion = $conexion->conexion();

            $sql = "INSERT INTO categorias(nombre) VALUES('".$nombre."');";
            $result = mysqli_query($conexion, $sql);

            return $result;
        }

        public function borrar($id){
            $conexion = new conectar();
            $conexion = $conexion->conexion();

            $sql = "DELETE FROM categorias WHERE id=".$id.";";
            $result = mysqli_query($conexion, $sql);

            return $result;
        }

        public function Nombre_mod($id){
            $conexion = new conectar();
            $conexion = $conexion->conexion();

            $sql = "SELECT nombre from categorias WHERE id=$id;";
            $result = mysqli_query($conexion, $sql);

            return $result;
        }

        public function modificar($id, $nombre){
            $conexion = new conectar();
            $conexion = $conexion->conexion();

            $sql = 'UPDATE categorias 
                    SET nombre= "'.$nombre.'"
                    WHERE id = '.$id.';';
            $result = mysqli_query($conexion, $sql);

            return $result;
        }
    }
?>