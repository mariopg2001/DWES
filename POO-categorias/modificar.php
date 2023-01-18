<?php
    require_once "conexion.php";
    require_once "modelo.php";

    $id=$_GET['id'];
    $nombre_mod=$_POST['nombre'];
    $consulta = new Modelo();

    echo $nombre_mod;

    if($consulta->modificar($id, $nombre_mod)){
        header('Location: consulta.php');
    }
    else{
        echo 'Error al modificar. <a href="form_mod.php">Volver</a>';
    }
?>