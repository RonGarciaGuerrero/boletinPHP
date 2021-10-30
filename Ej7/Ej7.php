<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej7</title>
    <!-- Autor: Ronald Garcia Guerrero -->
</head>
<body>
    <h1>Diseñe un programa que genere un número aleatorio entre 1 y 20 y calcule su sumatorio. Por ejemplo, si sale el 5, el sumatorio desde 1 hasta 5 que son 15.</h1>
    <?php
        $num=random_int(1,20);//genero un numero aleatorio entre 1 y 20
        echo $num.'<br/>';
        $sum=0;
         for($i=0;$i<=$num;$i++){
             $sum=$sum+$i;
        }
        echo '<br/>';
        //$sum=($num*($num+1)/2);
        echo $sum;
    ?>
</body>
</html>