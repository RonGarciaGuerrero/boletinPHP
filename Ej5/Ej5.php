<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej4</title>
</head>
<body>
    <h1>Ampliar la página anterior para crear un conversor de euros a otra moneda que podrá seleccionarse de una lista (figura 2a).
    Tomar los siguientes valores para la conversión:
    1€ = 1,325 dólares USA
    1€ = 0,927 libras esterlinas
    1€ = 118,232 yenes japoneses
    1€ = 1,515 francos suizos
    Deberá comprobarse que se ha introducido un valor, mostrándose un mensaje de aviso en caso contrario
    </h1><br/>
    <?php
        $euros =$_POST['campo1'];
        $moneda = $_POST['moneda'];
        $moneda =strtolower($moneda);
        define("usd", "1.325");//defino las constantes
        define("gbp", "0.927");
        define("jpy", "118.232");
        define("sfr", "1.515");
        
        if ($moneda=='usd'){
            $result=$euros*usd;
            echo $euros.' euros son: '.$result.' USD';
        }
        if ($moneda=='gbp'){
            $result=$euros*gbp;
            echo $euros.' euros son: '.$result.' GBP';
        }
        if ($moneda=='jpy'){
            $result=$euros*jpy;
            echo $euros.' euros son: '.$result.' JPY';
        }
        if ($moneda=='sfr'){
            $result=$euros*sfr;
            echo $euros.' euros son: '.$result.' SFR';
        }
    ?>
</body>
</html>