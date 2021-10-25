<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej2</title>
</head>
<body>
<h1>Crear una aplicacion que muestre un mensaje de bienvenida
que dependa de la hora actual, de la siguiente manera:</h1><br/>
</h3>Si la hora se encuentra entre las 8 y las 13, mostrará ‘Buenos
días’<br/>
Si la hora se encuentra entre las 14 y las 20, mostrará ‘Buenas
tardes’<br/>
Si la hora se encuentra entre las 21 y las 7, mostrará ‘Buenas
noches’</h3><br/>

<?php 
    $hoy = getdate();
    $hora = $hoy['hours'];
    echo $hoy['hours'].':'.$hoy['minutes'];
    echo '<br/>';
    if($hora<=12){
        echo 'Buenos días';
    }
    if($hora>12 && $hora<=21){
        echo 'Buenas tardes';
    }else{
        echo'Buenas noches';
    }
    //print_r($hoy);
?>
</body>
</html>