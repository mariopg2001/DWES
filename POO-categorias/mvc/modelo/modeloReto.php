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
               
                if( $e->getCode()== '1062'){
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
        public function modificarReto($reto){
           
            try{
              
                $sql= "UPDATE retos SET Nombre='".$reto['Nombre']."', Descripcion='".$reto['descripcion']."', Publicado=".$reto['publicado'].", seccion='".$reto['seccion']."', id_categoria=".$reto['categoria'].", fechaInicioInscripcion='".$reto['finicioIns']."', fechaFinInscripcion='".$reto['ffinIns']."', fechaInicioReto='".$reto['inicioreto']."', fechaFinReto='".$reto['finreto']."'  WHERE idReto=".$reto['idReto'].";";
               $result= $this->conexion->query($sql);
               echo $sql;
                return $result;
            }
            catch(Exception $e){
                if( $e->getCode()== '1062'){
                echo 'Ya hay un reto con ese nombre
                <a href="formmod_reto.php?id='.$reto['idReto'].'"><button>Volver</button></a>
                <a href="consulta_retos.php"><button>consultar</button></a>';
                }
            }
            
        }
    }
