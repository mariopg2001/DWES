<?php
    require_once "../configuracion/config.php";
    require_once "../modelo/modelo.php";
?>
<html>
	<head>
		<meta charset=utf-8 />
        <link rel="stylesheet" type="text/css" href="../css/style.css"/>
        <title>Consulta Retos</title>
	</head>
	<body>
        <!-- <button><a href="formularioreto.php">Añadir Reto</a></button> -->
            <?php	
                $modelo = new Modelo();
                
                // Cambiar el estilo de la consultaz
                
                echo '<table>
                <tr>
                    <td>Id</td>
                    <td>Nombre </td> 
                </tr>';
                $reto='retos';
                $consulta= $modelo->consulta($reto);

                foreach($consulta as $fila){

                    echo '<tr>	 
                            <td>'.$fila['idReto'].'</td>
                            <td>'.$fila['Nombre'].'</td>
                        </tr>';
                }
            ?>
        </table>
        </body>
</html>