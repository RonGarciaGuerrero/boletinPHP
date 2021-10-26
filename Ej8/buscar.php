<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar</title>
</head>
<body>
    <h1>Buscar en la BBDD Clientes</h1><br/>
    <h3>Opción 1. Buscar por el primer Apellido</h3>
    <form action="Ej8.php" method="post">
        <label for="nombre">Primer Apellido</label><br/>
        <input style="text-transform: uppercase;" required type="text"><br/><br/>
        <input type="submit">
    </form>
    <h3>Opción 2. Buscar por el número de telefono</h3>
    <form action="Ej8.php" method="post">
        <label for="nombre">Primer Apellido</label><br/>
        <input style="text-transform: uppercase;" required type="text"><br/><br/>
        <input type="submit">
    </form>
    <h4>Solo se puede buscar con una opción a la vez.</h4>
</body>
</html>