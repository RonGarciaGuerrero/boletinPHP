<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
    <!-- Autor: Ronald Garcia Guerrero -->
</head>
<body>
<h1>Valor de la cookie:</h1>
    <?php
        if(array_key_exists('color',$_COOKIE)){//si no se ha usado el formulario antes intento recuperar el color de la cookie
            $colorSelect = $_COOKIE['color'];
            echo 'La cookie esta establecida y su valor es: '.$colorSelect.'<br/>';
        }else{
            $colorSelect = 'auto';
            echo 'No hay cookie establecida.<br/>';
        }
    ?>
    <a href="./Ej11ElegirColor.php">Volver a Elegir Color</a>    
</body>
</html>