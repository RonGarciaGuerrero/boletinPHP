<?php
    $visitas=0;
    if(isset($_COOKIE['visitas'])){
        //la cookie ha sido creada, aumento en uno el contador
        $visitas=intval($_COOKIE['visitas'])+1;
        
    }else{
        //primera vez que se visita la pagina
        $visitas=1;
    }
    setcookie('visitas',$visitas, time()+3600*24*30);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej13</title>
    <!-- Autor: Ronald Garcia Guerrero -->
</head>
<body>
    <h1>Contador del número de accesos a una página</h1>
    <p>Aplicación que informe de cuantas veces hemos visitado una página web</p>
    <p><b>¿Cuantas veces ha visitado usted esta página?</b></p>
    <p>Usted ha visitado esta pagina &nbsp; <?php echo $visitas ?> &nbsp; veces.</p>

</body>
</html>