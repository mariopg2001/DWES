<html>
	<head>
		<meta charset=utf-8 />
        <link rel="stylesheet" type="text/css" href="../../css/style.css"/>
        <title>Consulta Retos</title>
	</head>
	<body>
		<div>
            <?php
                require_once('../controlador/controladorReto.php');
		        if(empty($_POST)){
                    $controlador=new ControladorReto();
                    $result=$controlador->consultaReto();
                    if(isset($_GET['id'])){
                        while($fila = $result ->fetch_assoc()){
                            if($fila['idReto']==$_GET['id']){
                                $nombreReto=$fila['Nombre'];
                                $descripcion= $fila['Descripcion'];
                               
                                 
                            }
                        }
                    }
                    echo '
                        <form action="formmod_reto.php" method="post">
                         <label>Nombre del reto:</label>
                            <input type="text" name="'.$_GET['id'].'" value="'$nombreReto'"><br>
                    
                    
                    
                    ';
                }
            ?>
			
               
                <label >Descripción del reto:</label><textarea  name="descripcion"></textarea><br>
                <label >Publicado:</label>
                <input type="radio" name="publicado" value=1  >Si</label>
                <input type="radio" value=0 name="publicado" checked >No</label>
                <br>

                <label >Dirigido a:</label>
                <select name="dirigido">
                    <option  value="Seccion de Escuela" hidden selected>Selecciona una seccion</option>
                    <option value="Primaria">Primaria</option>
                    <option value="ESO">ESO</option>
                    <option value="Bachillerato">BACHILLERATO</option>
                    <option value="G.Medio">G. Medio</option>
                    <option value="G.Superior">G. Superior</option>
                </select>
                <br>
                <label >Categoría:</label>
                <select  name="cat">
                    <?php 
                        require_once('../controlador/controladorcategoria.php');
                        $controlador=new ControladorCategoria();
                        $result=$controlador-> consultar();
                        while($fila = $result ->fetch_assoc()){
                            echo '
                            <option  value="Categoria" hidden selected>Selecciona una Categoria</option>
                            
                            <option value="'.$fila['idcategoria'].'">'.$fila['nombre'].'</option>';
                        }
                    ?>
                </select><br>
                <p>Fecha inscripción</p>
                <label>Fecha inicio:</label><input type="date" name="finicioIns"><br>
                <label>Fecha fin:</label><input type="date" name="ffinIns"><br>
                <br>
                <p>Fecha realización</p>
                <label>Fecha inicio:</label><input type="date" name="inicioreto"><br>
                <label>Fecha fin:</label><input type="date" name="finreto"><br>
                </div><br>
               
                <input type="submit"  name="enviar" value="enviar">
			</form>
		</div>
		
	</body>
</html>