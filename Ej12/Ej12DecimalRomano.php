<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej12</title>
    <!-- Autor: Ronald Garcia Guerrero -->
</head>
<body>
    <h1>TRADUCTOR DE DECIMAL A ROMANO</h1>
    <form action="" method="POST">
        <label for="decimalRomano">Introduzca en decimal el número a traducir a romano</label><br/>
        <input required type="number" id="campo1" name="decimal" placeholder="Decimal">
        <input type="submit" value="Convertir">
    </form>
    
    <?php
        function decimal_romano($integer){
            //se asignan los valores del array
            $table = array('M'=>1000, 'CM'=>900, 'D'=>500, 'CD'=>400, 'C'=>100, 
                        'XC'=>90, 'L'=>50, 'XL'=>40, 'X'=>10, 'IX'=>9,   
                        'V'=>5, 'IV'=>4, 'I'=>1);

            $return = '';
            //como en cada iteración voy restando al integer la condicion de parada es que el integer sea cero  
            while($integer > 0){
                foreach($table as $rom=>$dec){
                    if($integer >= $dec){
                        $integer = $integer - $dec;
                        $return = $return . $rom;
                        break;//para salir del ciclo inmediatamente superior es decir del foreach
                    }
                }
            }
            return $return;

        }
        
        if(array_key_exists('decimal',$_POST)){
            $integer=intval($_POST['decimal']);// hay que hacer un parse porque los valores se envian como texto y hay que llevarlos a números con "intval"
            echo 'En números romanos '.$integer.' es: '.decimal_romano($integer);//se llama a la función
        }
        
    ?>    
</body>
</html>
