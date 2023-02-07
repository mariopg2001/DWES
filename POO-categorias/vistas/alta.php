<html>
	<head>
		<meta charset=utf-8 />
        <link rel="stylesheet" type="text/css" href="index.css"/>
        <title>Consultat Categorias</title>
	</head>
	<body>

        <?php
            require_once "../configuracion/config.php";
            require_once "../modelo/modelo.php";

            $nombre=$_POST['cat'];
            $consulta = new Modelo();
            if($nombre== ''){
                echo 'La variable " Nombre " esta vacia <button><a href="formularioalta.php">volver</a></button> ';
            }else{
                if($consulta->alta($nombre)){
                  echo 'La categoria se ha introducido correctamente. <button><a href="consulta.php">Mostrar categorias</a></button>';
                }
                else{
                    echo 'Se ha producido un error al introducir la categoria. <a href="formularioalta.php">Siguiente</a>';
                }
            }
            
        ?>
    </body>
</html>