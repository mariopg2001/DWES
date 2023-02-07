<?php
    require_once "config.php";
    require_once "modelo.php";
?>
<html>
	<head>
		<meta charset=utf-8 />
        <link rel="stylesheet" type="text/css" href="index.css"/>
        <title>Consulta Retos</title>
	</head>
	<body>
        <!-- <button><a href="formularioreto.php">Añadir Reto</a></button> -->
            <?php	
                    $modelo = new Modelo();
                    
                   	
                   
                        echo '<table>
                        <tr>
                            <td>Nombre </td>
                            <td>Descripcion</td>
                            <td>Fecha IN. Inscrip.</td>
                            <td>Fecha FIN. Inscrip.</td>
                            <td>Fecha IN. reto.</td>
                            <td>Fecha FIN. reto.</td>
                            <td>Publicado</td>
                            <td>Profesor</td>
                            <td>Categoría</td>
                            <td>Borrar</td>
                            <td>modificar</td>
                        </tr>';
                        $reto='retos';
                        $consulta= $modelo->consulta($reto);

                        foreach($consulta as $fila){

                            echo '<tr>	 
                                    <td>'.$fila['Nombre'].'</td>
                                    <td>'.$fila['Descripcion'].'</td>
                                    <td>'.$fila['fechaInicioInscripcion'].'</td>
                                    <td>'.$fila['fechaFinInscripcion'].'</td>
                                    <td>'.$fila['fechaInicioReto'].'</td>
                                    <td>'.$fila['fechaFinReto'].'</td>
                                    <td>'.$fila['Publicado'].'</td>
                                    <td>'.$fila['id_profesor'].'</td>
                                    <td>'.$fila['id_categoria'].'</td>
                                    <td><a href="borrar.php?id='.$fila["idReto"].'"><img src="imagen/basura.jpg"></a></td>
                                    <td><a href="form_modReto.php?id='.$fila["idReto"].'"><img src="imagen/lapiz.png"></a></td>
                                </tr>';
                        }
            ?>
        </table>
        </body>
</html>