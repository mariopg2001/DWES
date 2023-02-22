<?php
    require_once "../configuracion/config.php";
    require_once "../modelo/modelo.php";
?>
<html>
    <head>
        <meta charset=utf-8 />
        <link rel="stylesheet" type="text/css" href="../css/style.css"/>
        <title>Añadir Reto</title>
    </head>
    <body>
        <h3 >Alta de Retos</h3>
        <form action="alta_reto.php" method="post" id="formulario">
            <label>Nombre del reto: </label>
            <input name="nreto" type="text"  placeholder="Nombre del reto"/><br>
            <label>Descripción: </label>
            <input name="dreto" type="text"  placeholder="Descripción del reto"/><br>
            <label>Inicio de Inscripcion: </label>
            <input name="fiins" type="date"  /><br>
            <label>Fin de Inscripcion: </label>
            <input name="ffins" type="date"  /><br>
            <label>Inicio de Reto: </label>
            <input name="fireto" type="date"  /><br>
            <label>Fin de Reto: </label>
            <input name="ffreto" type="date"  /><br>
            <label>Publicado: </label>
            <input type="radio" name="public" value="si" />
            <input type="radio" name="public" value="no" /><br><br>
            <!-- <label>Selecciona la categoria a la que pertenece</label> -->
          
            <label>Selecciona el profesor que crea el reto</label>
            <select name="profesor">
                <option>
                <?php 
                    $prof='profesores';
                    $modelo = new Modelo();
                    $consulta= $modelo->consulta($prof);
                    foreach($consulta as $fila){
                        echo '<option name="'.$fila['Nombre'].'">'.$fila['Nombre'].'</option>';
                    }
                ?>
            </select><br><br>
            <label>Selecciona la categoria </label>
            <select name="categoria">
                <option>
                <?php 
                    $cat='categorias';
                    $modelo = new Modelo();
                    $consulta2= $modelo->consulta($cat);
                    foreach($consulta2 as $fila){
                        echo '<option name="'.$fila['nombre'].'">'.$fila['nombre'].'</option>';
                    }
                ?>
            </select><br><br>
           
          


            <input type="submit" name="enviar" value="enviar"/>
        </form>
        <button><a href="consulta_retos.php">Cancelar</a></button>
    </body>
</html>