<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <h1>Crear una página que muestre una tabla de conversión de euros a pesetas como la que aparece en la figura 1. La equivalencia es 1€ = 166.386 pts.</h1><br/>

    <?php 
        define("pts", "166.386");
        for($i=1;$i<=10;$i++){
            echo $i.'€= '.$i*pts.'pts'.'<br>';
        }

    ?>

</body>
</html>