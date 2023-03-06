<html>
	<head>
		<meta charset=utf-8 />
        <link rel="stylesheet" type="text/css" href="../../css/style.css"/>
        <title>Consultat Categorias</title>
	</head>
	<body>
        <button><a href="../retos/consulta_retos.php">Ver los retos</a></button>
        <button><a href="formularioalta.php">Añadir categoria</a></button>
        <button><a href="../retos/alta_reto.php">Añadir retos</a></button>
        
        <?php
            if(isset($_GET['nombre']) && isset($_GET['id'])){
                echo '
                    <h2>AVISO</h2>
                    <h4>¿Seguro que quieres eliminar la categoria: '.$_GET['nombre'].' ?</h4>
                    <button><a href="borrar.php?id='.$_GET['id'].'">Sí</button>
                    <button><a href="consulta.php">No</button>
                ';
            }
            else{
                require_once('../controlador/controladorCategoria.php');
                $controladorCategoria=new ControladorCategoria();
                $result=$controladorCategoria->consultar();
                echo '<table>
                            <tr>
                                <td>Nombre</td>
                                <td>Borrar</td>
                                <td>modificar</td>
                            </tr>';
                if($result->num_rows>0){
                    while($fila = $result ->fetch_assoc()){
                            echo '<tr>
                            <td >'.$fila['nombre'].'</td>
                            <td><a href="form_mod.php?id='.$fila["idcategoria"].'"><img src="../../imagen/lapiz.png"></a></td>
                            <td><a href="consulta.php?nombre='.$fila['nombre'].'&id='.$fila['idcategoria'].'"><img src="../../imagen/basura.jpg"></a></td>
                            </tr>';	
                    }
                }
                else{
                    echo '<tr><td>No hay Categorias.</td></tr>';
                }
            
            }
        ?>
        </table>
    </body>
</html>


