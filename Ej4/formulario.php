<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej4 Formulario</title>
    <!-- Autor: Ronald Garcia Guerrero -->
</head>
<body>
<h1>Crear una aplicacion que convierta una cantidad de dinero expresada en euros a su correspondiente valor en pesetas (figura 1a). Deberá comprobarse que se ha introducido un valor, mostrándose un mensaje de aviso en caso contrario (figura 1b). Nota: 1€ = 166,386 pts.
    </h1><br/>
    <form action="Ej4.php" method="post" >
        <label for="texto">Importe en Euros:</label><br/>
        <input required type="number" id="campo1" name="campo1" placeholder="Inserte la cantidad">
        <input type="submit">
    </form>
</body>
</html>