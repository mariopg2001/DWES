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
                        $id=$_GET['id'];
                        while($fila = $result ->fetch_assoc()){
                            if($fila['idReto']==$_GET['id']){
                                $nombreReto=$fila['Nombre'];
                                $descripcion= $fila['Descripcion'];
                                $FinicioIns=$fila['fechaInicioInscripcion'];
                                $FfinIns=$fila['fechaFinInscripcion'];
                                $FinicioReto=$fila['fechaInicioReto'];
                                $FfinReto=$fila['fechaFinReto'];
                                $publicado=$fila['Publicado'];
                                $categoria=$fila['id_categoria'];
                                $seccion=$fila['seccion'];
                                 
                            }
                        }
                    }
                    echo '
                        <form action="formmod_reto.php" method="post">
                        <input id=ocultar name="idReto" value="'.$id.'"><br>
                        
                         <label>Nombre del reto:</label>
                             <input display="none"type="text" name="Nombre" value="'.$nombreReto.'"><br>
                        <label >Descripción del reto:</label>
                            <textarea  name="descripcion" >'.$descripcion.'</textarea><br>
                            <label >Publicado:</label>';
                            if($publicado==1){
                                echo '<input type="radio" name="publicado" value=1 checked >Si</label>
                                    <input type="radio" value=0 name="publicado"  >No</label><br>';
                            }else{
                                echo '<input type="radio" name="publicado" value=1  >Si</label>
                                    <input type="radio" value=0 name="publicado" checked >No</label><br>';
                            }
                            echo ' <label >Dirigido a:</label>
                                 <select name="seccion">
                                    <option  value="Seccion de Escuela" hidden selected>Selecciona una seccion</option>
                                    <option value="Primaria">Primaria</option>
                                    <option value="ESO">ESO</option>
                                    <option value="Bachillerato">BACHILLERATO</option>
                                    <option value="G.Medio">G. Medio</option>
                                    <option value="G.Superior">G. Superior</option>
                            </select>
                            <br>
                            <label >Categoría:</label>
                            <select  name="categoria">';
                                require_once('../controlador/controladorcategoria.php');
                                $controlador=new ControladorCategoria();
                                $result=$controlador-> consultar();
                                while($fila = $result ->fetch_assoc()){
                                    echo '
                                    <option  value="Categoria" hidden selected>Selecciona una Categoria</option>
                                    
                                    <option value="'.$fila['idcategoria'].'">'.$fila['nombre'].'</option>';
                                }
                                
                           echo' </select><br>
                           <p>Fecha inscripción</p>
                           <label>Fecha inicio:</label><input type="date" value="'.$FinicioIns.'" name="finicioIns"><br>
                           <label>Fecha fin:</label><input type="date" value="'.$FfinIns.'" name="ffinIns"><br>
                           <br>
                           
                           <p>Fecha realización</p>
                           <label>Fecha inicio:</label><input value="'.$FinicioReto.'" type="date" name="inicioreto"><br>
                           <label>Fecha fin:</label><input type="date" value="'.$FfinReto.'" name="finreto"><br>
                           </div><br>
                           
                             <input type="submit"  name="enviar" value="enviar">
                           </form>
                           ';
                 
                }else{
                    $controlador= new ControladorReto();
                    $controlador->modificarReto($_POST);
                }
            ?>     
		</div>
	</body>
</html>