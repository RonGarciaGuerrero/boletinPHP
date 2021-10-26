<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej4 Formulario</title>
</head>
<body>
    <form action="Ej5.php" method="post" >
        <label for="texto">Importe en Euros:</label><br/>
        <input required type="text" id="campo1" name="campo1" placeholder="Inserte la cantidad">&nbsp;
        <select id="moneda" name="moneda">
            <option value="usd">USD</option>
            <option value="gbp">GBP</option>
            <option value="jpy">JPY</option>
            <option value="sfr">SFR</option>
        </select>
        
        <input type="submit">
    </form>
</body>
</html>

