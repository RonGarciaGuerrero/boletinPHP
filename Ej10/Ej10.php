<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej0 Selección</title>
    <!-- Autor: Ronald Garcia Guerrero -->
</head>
<body>
    <h1>Operaciones con bits</h1>
    <p>
        Escriba un programa que puedas elegir opciones y resolver:<br/>
        1.-Una secuencia aleatoria de 10 bits y su secuencia complementaria.
        2.- Escriba un programa que muestre una secuencia aleatoria de 10 bits y la detección de cambios de bits consecutivos en la secuencia. <br/>
        Es decir:<br/>
        si en la primera secuencia un bit es igual al bit siguiente, el bit correspondiente del resultado será 0<br/>
        si en la primera secuencia un bit es distinto al bit siguiente, el bit correspondiente del resultado será 1<br/>
        A: 1 0 0 0 0 1 0 0 1 1<br/>
        ΔA: 1 0 0 0 1 1 0 1 0<br/>
        3.- Escriba un programa que muestre una secuencia aleatoria de bits y su conversión a código de Gray.<br/>
        B: 0 1 1 0 1 0 1 0 1 1<br/>
        G: 0 1 0 1 1 1 1 1 1 0<br/>
        4.- Escriba un programa que muestre dos secuencias aleatorias de 10 bits y el resultado de hacer la conjunción lógica ("y"lógico) bit a bit.
    </p>
    
    <form action="seleccion.php" method="post" >
    <label for="bits">Escoja una opción:</label>
    <select name="bits" id="bits">
    <option value="1">Bits y su secuencia complementaria</option>
    <option value="2">Bits y la detección de cambios de bits consecutivos</option>
    <option value="3">Bits y su conversión a código de Gray</option>
    <option value="4">Bits y su conjunción lógica</option>
  </select>
  <br><br>
  <input type="submit" value="Submit">
    </form>
</body>
</html>

