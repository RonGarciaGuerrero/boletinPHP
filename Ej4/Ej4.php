<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej4</title>
</head>
<body>
    <h1>Crear una aplicacion que convierta una cantidad de dinero expresada en euros a su correspondiente valor en pesetas (figura 1a). Deberá comprobarse que se ha introducido un valor, mostrándose un mensaje de aviso en caso contrario (figura 1b). Nota: 1€ = 166,386 pts.
    </h1><br/>
    <?php
        $euros =$_POST['campo1'];
        define("pts", "166.386");//defino la constante
        $result=$euros*pts;
        echo $euros.' euros son: '.$result.' pts';
    ?>
</body>
</html>