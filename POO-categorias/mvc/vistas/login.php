<?php
    if(isset($_POST['correo'])){
        $correo=$_POST['correo'];
        $contrasenia=$_POST['contrasenia'];
        require_once('controlador/controladorlog.php');
        $controladorLog=new ControladorLog();
		$controladorLog->iniciarSesion($correo,$contrasenia);	
    }
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset=utf-8 />
        <link rel="stylesheet" type="text/css" href="../../css/style.css"/>
        <title>Inicio Sesion</title>
	</head>
	<body>
        <h1>Inicio de sesión</h1>
        <form action="./" method="POST" >
            <div >
                <label >Correo electrónico</label>
                <input type="text" name="correo" required/>
            </div>
            <div >
                <label >Contraseña</label>
                <input type="password" name="contrasenia" required/>
            </div>
            <div >
                <button type="submit">Acceder</button>
            </div>
        </form>
    </body>
</html>
