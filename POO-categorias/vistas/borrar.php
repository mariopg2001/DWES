<?php
    require_once "../configuracion/config.php";
    require_once "../modelo/modelo.php";

    $id=$_GET['id'];

    $consulta = new Modelo();

    if($consulta->borrar($id)){
        header('Location: consulta.php');
    }
    else{
        echo 'Error al borrar la categoria '.$id.'. <a href="consulta.php">Volver</a>';
    }
?>