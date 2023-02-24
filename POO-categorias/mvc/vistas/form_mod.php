<html>
    <head>
        <meta charset=utf-8 />
        <link rel="stylesheet" type="text/css" href="index.css"/>
        <title>Modifica categoría</title>
    </head>
    <body>
        <h3>Modificar</h3>
        <?php
		require_once('../controlador/controladorcategoria.php');
		if(empty($_POST)){
			$controlador=new ControladorCategoria();
			$result=$controlador->consultar();
			if(isset($_GET['id'])){
				while($fila = $result ->fetch_assoc()){
					if($fila['idcategoria']==$_GET['id']){
						$categoria=$fila['nombre'];
					}
				}
			}
			echo '<form method="POST" action="form_mod.php">
			<label>Categoría <label>
			<input type="text" name="'.$_GET['id'].'" value="'.$categoria.'"/>
			<input type="submit" value="Aceptar"/><br>
			</form>';
		}		
		else{
			$controlador=new ControladorCategoria();
			$controlador->modificar($_POST);
		}
		?>
        <button><a href="consulta.php">Cancelar</a></button>
    </body>
</html>
