<?php
    if(array_key_exists('color',$_POST)){
        $colorSelect = $_POST['color'];
        setcookie("color", $colorSelect, time()+3600*24*30);  /* expira en 30 días */
    }else{
        if(array_key_exists('color',$_COOKIE)){//si no se ha usado el formulario antes intento recuperar el color de la cookie
            $colorSelect = $_COOKIE['color'];
        }else{
            $colorSelect = 'auto';
        }
    }
    
?>
<!-- Autor: Ronald Garcia Guerrero -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej11</title>
    <style>
        body{
            color:<?php echo $colorSelect ?>
        }
    </style>
</head>
<body>
    <h1>Cambio de color</h1>
    <p>
        Escriba una página que cambie el color de la letra según el color indicado por el usuario y que conste de dos páginas.<br/>
        En la primera página se elige el color y hay un enlace a la segunda página.<br/>
        En la segunda página se muestra el texto en el color elegido en la primera página, y hay un enlace a la primera página.<br/>
        Selección de colores (selección)<br/>
        Se ha elegido el color verde.<br/>
        Cambio de color: Rojo - Azul - Verde - Ninguno. <br/>
        Ir a otra página para comprobar la cookie
    </p>
    <p>
        Para cambiar el texto de color seleccione una opción:
    </p>
    <form action="" method="post" >
    <label for="color">Escoja una opción:</label>
    <select name="color" id="color">
    <option value="red">Rojo</option>
    <option value="blue">Azul</option>
    <option value="green">Verde</option>
    <option value="auto">Ninguno</option>
  </select>
  <br><br>
  <input type="submit" value="Aplicar cambio">
    </form>
    <a href="./comprobarCookie.php">Comprobar cookie</a>
</body>
</html>

