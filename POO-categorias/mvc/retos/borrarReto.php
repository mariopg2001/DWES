<?php
    $idReto=$_GET['id'];
    require_once('../controlador/controladorReto.php');
    $controlador=new ControladorReto();
    $resultado=$controlador->eliminar($idReto);
?>