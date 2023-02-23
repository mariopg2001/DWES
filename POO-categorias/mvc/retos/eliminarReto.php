<html>
	<head>
		<meta charset=utf-8 />
        <link rel="stylesheet" type="text/css" href="../../css/style.css"/>
        <title>Consultat Categorias</title>
	</head>
	<body>
        <button><a href="consulta_retos.php">Ver los retos</a></button>
        <button><a href="formularioalta.php">Añadir categoria</a></button>
        <button><a href="alta_retos.php">Añadir retos</a></button>
        
        <?php
            if(isset($_GET['Nombre']) && isset($_GET['id'])){
                echo '
                    <h2>AVISO</h2>
                    <h4>¿Seguro que quieres eliminar el reto: '.$_GET['nombre'].' ?</h4>
                    <button><a href="borrarReto.php?id='.$_GET['id'].'">Sí</button>
                    <button><a href="consulta.php">No</button>
                ';
            }else{
                echo '
                <label ><h3>retos:</label>
                    <select  name="cat">';
                            require_once('../controlador/controladorReto.php');
                            $controlador=new ControladorReto();
                            $result=$controlador-> consultaReto();
                            while($fila = $result ->fetch_assoc()){
                                $fila3=$fila['idReto'];
                                echo '
                                <option  value="Reto" hidden selected>Selecciona un reto</option>
                                <option value="'.$fila['idReto'].'">'.$fila['Nombre'].'</option>
                                ';
                            }
                    echo '
                    </select>
                    <button><a href="eliminarReto.php?id='.$fila['idReto'].'">Eliminar</button>';
                          
            }
		?>
    </body>
</html>
       