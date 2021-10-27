<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar</title>
</head>
<body>
    <h1>Insertar en la BBDD Clientes:</h1><br/>
    <form action="Ej8.php" method="post">
        <label for="nombre">Nombre</label><br/>
        <input style="text-transform: uppercase;" required type="text" name="nombre"><br/>
        <label for="apellidos">Apellidos</label><br/>
        <input style="text-transform: uppercase;" required type="text" name="apellidos"><br/>
        <label for="direccion">Dirección</label><br/>
        <input style="text-transform: uppercase;" required type="text" name="direccion"><br/>
        <label for="poblacion">Población</label><br/>
        <input style="text-transform: uppercase;" required type="text" name="poblacion"><br/>
        <label for="cp">Código Postal</label><br/>
        <input style="text-transform: uppercase;" required type="text" name="cp"><br/>
        <label for="telefono">Telefono</label><br/>
        <input required type="number" name="telefono"><br/>
        <label for="email">Email</label><br/>
        <input required type="text" name="email"><br/><br/>
        <input type="submit">
    </form>
</body>
</html>