<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
    <!-- Autor: Ronald Garcia Guerrero -->
</head>
<body>
    <h1>Dado un numero, escribir la tabla de multiplicar de dicho número</h1><br/>

    <?php 
        $tabla =$_POST['campo1'];
        for($i=1;$i<=10;$i++){//itero sobre la variable i 
            echo $i.' * '.$tabla.'='.($i*$tabla).'<br/>'; //en cada iteración multiplico por la constante e imprimo en lineas diferentes
        }

    ?>

</body>
</html>