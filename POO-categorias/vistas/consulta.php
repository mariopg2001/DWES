<?php
    require_once "../configuracion/config.php";
    require_once "../modelo/modelo.php";
?>
<html>
	<head>
		<meta charset=utf-8 />
        <link rel="stylesheet" type="text/css" href="../css/style.css"/>
        <title>Consultat Categorias</title>
	</head>
	<body>
        <button><a href="consulta_retos.php">Ver los retos</a></button>
        <button><a href="formularioalta.php">Añadir categoria</a></button>
       
            <?php	
                    $modelo = new Modelo();
                    
                   	
                    // if($result ->nums_rows==0){
                    //     echo 'No hay datos';
                    // }else{
                        echo '<table>
                        <tr>
                            <td>Nombre</td>
                            <td>Borrar</td>
                            <td>modificar</td>
                        </tr>';
                        $categ='categorias';
                        $consulta= $modelo->consulta($categ);

                        foreach($consulta as $fila){
                            echo '<tr>	 
                                    <td>'.$fila['nombre'].'</td>
                                    <td><a href="borrar.php?id='.$fila["idcategoria"].'"><img src="../imagen/basura.jpg"></a></td>
                                    <td><a href="form_mod.php?id='.$fila["idcategoria"].'"><img src="../imagen/lapiz.png"></a></td>
                                </tr>';
                        }

                    // }
                    
            ?>
        </table>
        </body>
</html>