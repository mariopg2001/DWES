<html>
	<head>
		<meta charset=utf-8 />
        <link rel="stylesheet" type="text/css" href="../../css/style.css"/>
        <title>Consulta Retos</title>
	</head>
	<body>
        <button><a href="alta_retos.php">Añadir retos</a></button>
        <button><a href="formularioalta.php">Añadir categoria</a></button>
		<button><a href="consulta.php">Consulta las categorias</a></button>

        <?php
		if(isset($_GET['idReto'])){
			$id=$_GET['idReto'];
			require_once('../controlador/controladorreto.php');
            $controladorReto=new ControladorReto();
            $result=$controladorRetos->consultar();
			while($fila = $result ->fetch_assoc()){
				if($fila['idreto']==$id){
					$nombre=$fila['nombre'];
				}
			}
		}
		else{
			require_once('../controlador/controladorreto.php');
            $controladorReto=new ControladorReto();
		    $result=$controladorReto->consultaReto();
			?>
			<h3>Retos</h3>
			<table>
				<tr>
					<td>Nombre</td>
					<td>Categoría</td>
					<td>Publicado</td>
					<td>Seccion</td>

				</tr>
			<?php
			require_once('../controlador/controladorcategoria.php');
            $controladorCategoria=new ControladorCategoria();
			if($result->num_rows>0){
				while($fila = $result ->fetch_assoc()){
					if($fila['Publicado']==1){
						$publicados='Si';
					}else{
						$publicados='No';
					}
					$cat=$controladorCategoria->consultarnombre($fila['id_categoria']);
					echo '<tr>
					<td>'.$fila['Nombre'].'</a></td>';
                    $categoria = $cat ->fetch_assoc();
				    echo '<td>'.$categoria['Nombre'].'</td>';
                    echo '<td>'.$publicados.'</td>
							<td>'.$fila['seccion'].'</td>';
					
				}
			}
		}
		?>
	</table>
  </body>
</html>