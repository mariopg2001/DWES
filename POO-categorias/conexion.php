<?php
    class conectar{
        private $contra="";
        private$bbdd='appretos';
        private $usu='root';
        private $server='localhost';

        
        public function conexion(){
            $conexion = new mysqli($this->server, $this->usu, $this->contra, $this->bbdd);
            
            return $conexion;
        }
    }
?>
    
    