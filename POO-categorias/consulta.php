<?php
    require_once "conexion.php";
    require_once "modelo.php";
?>
<html>
	<head>
		<meta charset=utf-8 />
        <link rel="stylesheet" type="text/css" href="index.css"/>
        <title>Consultat Categorias</title>
	</head>
	<body>
        <button><a href="formularioalta.php">Añadir categoria</a></button>
        <table>
            <tr>
                <td>Nombre</td>
                <td>Borrar</td>
                <td>modificar</td>
            </tr>
            <?php	
                    $Modelo = new Modelo();
                    
                    $sql = "SELECT * FROM categorias;";
                    $result = $Modelo->mostrar($sql);	

                    foreach($result as $fila){
                        echo '<tr>	 
                                <td>'.$fila['nombre'].'</td>
                                <td><a href="borrar.php?id='.$fila["id"].'"><img src="imagen/basura.jpg"></a></td>
                                <td><a href="form_mod.php?id='.$fila["id"].'"><img src="imagen/lapiz.png"></a></td>
                            </tr>';
                    }
            ?>
        </table>
        </body>
</html>