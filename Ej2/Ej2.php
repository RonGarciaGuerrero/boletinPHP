<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej2</title>
    <!-- Autor: Ronald Garcia Guerrero -->
</head>
<body>
<h1>Crear una aplicacion que muestre un mensaje de bienvenida
que dependa de la hora actual, de la siguiente manera:</h1><br/>
</h2>Si la hora se encuentra entre las 8 y las 13, mostrará ‘Buenos
días’<br/>
Si la hora se encuentra entre las 14 y las 20, mostrará ‘Buenas
tardes’<br/>
Si la hora se encuentra entre las 21 y las 7, mostrará ‘Buenas
noches’</h2><br/><br/>

<?php 
    $hoy = getdate();//recojo con la función los valores de hoy
    $hora = $hoy['hours']; //luego me quedo solo con la hora
    echo $hoy['hours'].':'.$hoy['minutes']; //imprimo la hora completa de hoy
    echo '<br/>';
    if($hora<=12){
        echo 'Buenos días';//si son menos de las 13 imprimo buenos dias 
    }
    if($hora>12 && $hora<=21){
        echo 'Buenas tardes';//entre las 13 y las 21 imprimo buenas tardes
    }else{
        echo'Buenas noches'; //despues de las 21 buenas noches
    }
    
?>
</body>
</html>