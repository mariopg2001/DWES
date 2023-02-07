<html>
    <head>
        <meta charset=utf-8 />
        <link rel="stylesheet" type="text/css" href="index.css"/>
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
            <input type="radio" name="public" value="no" />
            
            <select name="profesor">
            <!-- me quedo en traer los datos de la tabla de categorias y profesores -->
          


            <input type="submit" name="enviar" value="enviar"/>
        </form>
        <button><a href="consulta_retos.php">Cancelar</a></button>
    </body>
</html>