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
    <h1>TRADUCTOR DE ROMANO A DECIMAL</h1>
    <form action="" method="POST">
        <label for="romanoDecimal">Introduzca en ROMANO el número a traducir a Decimal</label><br/>
        <input required type="text" id="campo1" name="romano" placeholder="Número en MAYÚSCULAS">
        <input type="submit" value="Convertir">
    </form>
    
    <?php
        function romano_decimal($romano){
            //se asignan los valores del array con orden de precedencia
            $table = array('CM'=>900, 'CD'=>400, 'XC'=>90, 'XL'=>40, 'IX'=>9, 'IV'=>4,
            'M'=>1000, 'D'=>500, 'C'=>100, 'L'=>50, 'X'=>10, 'V'=>5,  'I'=>1);

            $return = 0;
            //como en cada iteración voy restando al $romano la condicion de parada es que el $romano este vacío 
            while($romano != ""){
                $encontrado=false;
                foreach($table as $rom=>$dec){
                    if(substr($romano,0,strlen($rom)) == $rom){
                        $romano = substr($romano,strlen($rom));
                        $return = $return + $dec;
                        $encontrado=true;
                        break;//para salir del ciclo inmediatamente superior es decir del foreach
                    }   
                }
                if(!$encontrado){
                    return NULL;
                }
            }
            return $return;
        }
        
        if(array_key_exists('romano',$_POST)){
            $romano=strtoupper($_POST['romano']);//convierto a mayusculas para que concida con los valores del array
            $decimal=romano_decimal($romano);//se llama a la función
            if($decimal!=NULL){
                echo 'En decimal '.$romano.' es: '.$decimal;
            }else{
                echo 'Error, la cadena introducida no es un número romano';
            }
        }
        //falta validar que no haya mas de tres M', 'D', 'C', 'L', 'X', 'V', 'I' pero se complicaba mas el ejercicio 
    ?>    
</body>
</html>