<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <title>POO PHP</title>
</head>
<body>
    
    <h2>Programacion Orientada a objetos PHP</h2>
<div class="margen">
    <?php
    require_once('clases/Clase1.php');
    require_once('clases/Cliente.php');
    require_once('clases/Producto.php');

    echo "<h3>Clases y Objetos</h3>";

    $objeto = new ClasePropiedades();//Instanciar
    echo "<p>".$objeto->ciudades."</p>";
    echo "<hr>";

    $cliente1 = new Cliente("indra",5,true);
    //echo "<p>".$cliente1->nombre."</p>";
    echo "<p>" .$cliente1->getNombre(). "</p>";
    $cliente1->setNombre("repsol");
    echo "<p>" .$cliente1->getNombre(). "</p>";
    echo "<hr>";

    $producto1 = new Producto(100,"camisa",5,7.99);
    echo "<p>" .$producto1->getPrecio(). "</p>";
    $producto1->setPrecio(7.95);
    echo "<p>" .$producto1->getPrecio(). "</p>";
    echo "<p>" .$producto1->total(). "</p>";
    ?>
</div>
</body>
</html>