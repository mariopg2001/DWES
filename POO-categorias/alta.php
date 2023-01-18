<html>
	<head>
		<meta charset=utf-8 />
        <link rel="stylesheet" type="text/css" href="index.css"/>
        <title>Consultat Categorias</title>
	</head>
	<body>

        <?php
            require_once "conexion.php";
            require_once "modelo.php";

            $nombre=$_POST['cat'];
            $consulta = new Modelo();

            if($consulta->alta($nombre)){
                echo 'La categoria se ha introducido correctamente. <button><a href="consulta.php">Mostrar categorias</a></button>';
            }
            else{
                echo 'Se ha producido un error al introducir la categoria. <a href="formulario.php">Siguiente</a>';
            }
        ?>
    </body>
</html>