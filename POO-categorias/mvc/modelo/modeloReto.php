<?php
     require_once "../configuracion/config.php";
    
    class ModeloReto{
     
        public function __construct(){
            $this->conexion=$this->conectar();
        }

        public function conectar(){
            $conexion= new mysqli(server,usu,contra,bbdd) or die ('No se puede conectar');
            $conexion->set_charset('utf8');

            return $conexion;
        }
        public function consultaReto(){
            $sql="SELECT * FROM retos";
            $result = $this->conexion->query($sql);
            return $result;
        }
        public function insertarReto($reto){
           
            try{
                 $descripcion=$reto['descripcion'];
                if(empty($descripcion)){
                    $descripcion='NULL';
                }
                else{
                    $descripcion="'$descripcion'";
                }
                $sql= "INSERT INTO retos(Nombre, Descripcion, fechaInicioInscripcion, fechaFinInscripcion, fechaInicioReto, fechaFinReto, Publicado, id_profesor, id_categoria ,seccion) 
                VALUES ('".$reto['nombre']."', ".$descripcion.", '".$reto['finicioIns']."','".$reto['ffinIns']."','".$reto['inicioreto']."','".$reto['finreto']."',".$reto['publicado'].",2,  ".$reto['cat'].", '".$reto['dirigido']."');";
                    $result = $this->conexion->query($sql);
                   
                    return $result;
            }
            catch(Exception $e){
                $error=$this->conexion->errno;
                if($error==1062){
                    echo 'El reto ya existe <a href="alta_reto.php"><button>Volver</button></a>';
                }
            }
        }
        public function borrar($id){
                $sql = "DELETE FROM retos WHERE idReto=".$id.";";
                $result = $this->conexion->query($sql);
                return $result;
            
            die();
        }
    }
