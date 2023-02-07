<?php
    require_once "../configuracion/config.php";

    class Modelo{
     
        public function __construct(){
            $this->conexion
        
        

        }

        public function consulta($tabla){
            $conexion = new conectar();
            $conexion = $conexion->conexion();
            $sql="SELECT * FROM ".$tabla.";";
            $result = $conexion->query($sql);

            return $result;

        }

        public function alta($nombre){
            $conexion = new conectar();
            $conexion = $conexion->conexion();
            try{
                $sql = "INSERT INTO categorias(Nombre) VALUES('".$nombre."');";
                $result = $conexion->query($sql);
                return $result;
            }catch(Exception $e){
                //echo $e->getmessage();
                //echo $e->getCode();
                if( $e->getCode()== '1062'){
                    echo 'La categoria ya existe
                    <a href="formularioalta.php"><button>Volver</button></a>';
                }
            }
            die();   
        }

        public function borrar($id){
            $conexion = new conectar();
            $conexion = $conexion->conexion();
            try{
                $sql = "DELETE FROM categorias WHERE idcategoria=".$id.";";
                $result = $conexion->query($sql);

                return $result;
            }catch(Exception $e){
                //echo $e->getmessage();
               // echo $e->getCode();
                if( $e->getCode()== '1451'){
                    echo 'La categoria esta asociada a un reto
                    <a href="consulta.php"><button>Volver</button></a>';
        
                }
            }
            die();
        }

        public function Nombre_mod($id){
            $conexion = new conectar();
            $conexion = $conexion->conexion();

            $sql = "SELECT Nombre from categorias WHERE idcategoria=$id;";
            $result = $conexion->query($sql);

            return $result;
        }
        
        public function modificar($id, $nombre){
            $conexion = new conectar();
            $conexion = $conexion->conexion();
            try{
                 $sql = 'UPDATE categorias 
                    SET Nombre= "'.$nombre.'"
                    WHERE idcategoria = '.$id.';';
            $result = $conexion->query($sql);

            return $result;
            }catch(Exception $e){
                //echo $e->getmessage();
                //echo $e->getCode();
                if( $e->getCode()== '1062'){
                    echo 'La categoria ya existe
                    <a href="form_mod.php?id='.$id.'"><button>Volver</button></a>
                    <a href="consulta.php"><button>consultar</button></a>';
        
                }

            }
            die();
        }
    }
?>