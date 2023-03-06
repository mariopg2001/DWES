<?php 
  session_start();
  if(!isset($_SESSION['idprofesor'])) {
    require_once('./vistas/login.php');
  }
  else{
    
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
    <h1>WEB RETOS</h1>
    <a href="./retos/alta_reto.php"><button>Añadir Reto</button></a>
    <a href="./vistas/formularioalta.php"><button>Añadir Categoria</button></a>
    <a href="./vistas/consulta.php"><button>Consultar Categoria</button></a>
    <a href="./retos/consulta_retos.php"><button>Consultar Reto</button></a>
    <a href="./vistas/Fsesion.php"><button>Cerrar la sesion</button></a>
    <a href="./vistas/pdf2.php"><button>Crear PDF Categorias </button></a>
    <a href="./vistas/pdf1.php"><button>Crear PDF Retos </button></a>
</body>
<?php 
    }
  ?>
</html>