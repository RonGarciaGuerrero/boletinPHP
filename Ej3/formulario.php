<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej3 Formulario</title>
</head>
<body>
    <form action="Ej3.php" method="post" >
        <!-- hago que el texto introducido sea en mayusculas -->
        <input style="text-transform: uppercase;" required type="text" id="campo1" name="campo1" pattern = "[a-zA-Z0-9]*\.?[a-zA-Z0-9]*" placeholder="Inserta el nombre completo del fichero, con su extension"> 
        <!-- uso un patron para asegurarme que no se usen dos puntos en la extension u otros formatos -->
        <input type="submit">
    </form>
</body>
</html>