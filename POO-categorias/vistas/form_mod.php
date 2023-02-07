<?php
    require_once "../configuracion/config.php";
    require_once "../modelo/modelo.php";

    $id = $_GET['id'];

    $consulta = new Modelo();

    $nombre_mod = $consulta->Nombre_mod($id);
    $array = $nombre_mod->fetch_array(MYSQLI_ASSOC);
?>

<html>
    <head>
        <meta charset=utf-8 />
        <link rel="stylesheet" type="text/css" href="index.css"/>
        <title>Modifica categoría</title>
    </head>
    <body>
        <h3>Modificar</h3>
        <form action="modificar.php?id=<?php echo $id; ?>" method="post" >
            
            <label>Nuevo nombre de la categoría: </label>
            <input  name="nombre" value="<?php echo $array["Nombre"]?>" type="text" />
            <input  type="submit" name="modificar" value="modificar"/>
        </form>
        <button><a href="consulta.php">Cancelar</a></button>
    </body>
</html>