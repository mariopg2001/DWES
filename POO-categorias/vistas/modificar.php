<?php
    require_once "../configuracion/config.php";
    require_once "../modelo/modelo.php";

    $id=$_GET['id'];
    $nombre_mod=$_POST['nombre'];
    $consulta = new Modelo();

   
    if($nombre_mod== ''){
        echo 'La variable " Nombre " esta vacia <button><a href="consulta.php">Siguiente</a></button> ';
        // echo 'La variable " Nombre " esta vacia <button><a href="consulta.php?id='.$_GET['id'].'">Siguiente</a></button> ';
    }else{
    if($consulta->modificar($id, $nombre_mod)){
        header('Location: consulta.php');
    }
    else{
        echo 'Error al modificar. <a href="form_mod.php">Volver</a>';
    }
}
?>