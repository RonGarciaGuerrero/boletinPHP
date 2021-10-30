<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej9 Formulario</title>
    <!-- Autor: Ronald Garcia Guerrero -->
</head>
<body>
    <h1>Calcular edad de una persona PHP</h1>
    <h3>Introducir el nombre y los apellidos por pantalla y la fecha de nacimiento. Calcular la edad de la persona en años y en dias</h3><br/>
    <form action="Ej9.php" method="post" >
        <!-- pido nombre y fecha de nacimiento-->
        <label for="nombre">Nombre:</label><br/>
        <input required type="text" id="campo1" name="campo1" placeholder="Introduzca su nombre">
        <label for="birthday">Fecha de nacimiento:</label><br/>
        <input type="date" id="birthday" name="birthday">
        <input type="submit">
    </form>
</body>
</html>