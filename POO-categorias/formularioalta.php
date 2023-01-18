<html>
    <head>
        <meta charset=utf-8 />
        <link rel="stylesheet" type="text/css" href="index.css"/>
        <title>Añadir categoria</title>
    </head>
    <body>
        <h3 >Alta de categorías</h3>
        <form action="alta.php" method="post" id="formulario">
            <label>Nombre de la categoría: </label>
            <input name="cat" type="text" />
            <input type="submit" name="enviar" value="enviar"/>
        </form>
        <button><a href="consulta.php">Cancelar</a></button>
    </body>
</html>
