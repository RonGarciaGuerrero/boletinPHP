<!-- Autor: Ronald Garcia Guerrero -->
<?php
$selectOption = $_POST['bits'];
if($selectOption=='1'){
    echo "1.-Una secuencia aleatoria de 10 bits y su secuencia complementaria.<br/>";
    $num = 10;
    // Se crea la matriz con los bits aleatorios
    $random = [];
    for ($i = 0; $i < $num; $i++) {
        $random[$i] = rand(0, 1);
    }
    // Se imprimen los bits aleatorios
    echo'<br/>';
    print "A: ";
    foreach ($random as $bit) {
        print "$bit ";
    }
    echo'<br/>';
    echo'<br/>';
    // Se crea la matriz con los valores complementarios
    $result = [];
    for ($i = 0; $i < $num; $i++) {
        $result[$i] = ($random[$i] == 1) ? 0 : 1;//"operador ternario" condicion ? valor_si_condicion_cierta : valor_si_condicion_falsa
    }
    // Se imprimen los bits con valores complementarios
    print "<span style=\"text-decoration: overline\">A</span>: ";
    foreach ($result as $bit) {
        print "$bit ";
    }
    echo'<br/>';
}

if($selectOption=='2'){
    echo '2.- Escriba un programa que muestre una secuencia aleatoria de 10 bits y la detección de cambios de bits consecutivos en la secuencia. <br/>';
    $num = 10;
    // Se crea la matriz con los bits aleatorios
    $random = [];
    for ($i = 0; $i < $num; $i++) {
        $random[$i] = rand(0, 1);
    }
    // Se imprimen los bits aleatorios
    echo'<br/>';
    print " A: ";
    foreach ($random as $bit) {
        print "$bit ";
    }
    echo'<br/>';
    echo'<br/>';
    // Se crea la matriz con la detección de los cambios
    $result = [];
    for ($i = 0; $i < $num - 1; $i++) {
        $result[$i] = ($random[$i] == $random[$i + 1]) ? 0 : 1;//"operador ternario" condicion ? valor_si_condicion_cierta : valor_si_condicion_falsa
    }
    // Se imprimen los valores
    print "&Delta;A:  ";
    foreach ($result as $bit) {
        print "$bit ";
    }
    echo'<br/>';
}
if($selectOption=='3'){
    $num = 10;
    echo '3.- Escriba un programa que muestre una secuencia aleatoria de bits y su conversión a código de Gray.<br/>';
    // Se crea la matriz con los bits aleatorios
    $random = [];
    for ($i = 0; $i < $num; $i++) {
        $random[$i] = rand(0, 1);
    }
    // Se imprimen los bits aleatorios
    echo'<br/>';
    print "B: ";
    foreach ($random as $bit) {
        print "$bit ";
    }
    echo'<br/>';
    echo'<br/>';
    // Se crea la matriz con el código Gray
    $result = [];
    $result[0] = $random[0];
    for ($i = 0; $i < $num - 1; $i++) {
        $result[$i + 1] = ($random[$i] == $random[$i + 1]) ? 0 : 1;
    }
    // Se imprimen valores
    print "G: ";
    foreach ($result as $bit) {
        print "$bit ";
    }
    echo'<br/>';
}
if($selectOption=='4'){
    $num = 10;
    //primera matriz de bits aleatorios
    $random1 = [];
    for ($i = 0; $i < $num; $i++) {
        $random1[$i] = rand(0, 1);
    }
    //se imprime la primera matriz
    //print "  <pre style=\"font-size: larger;\">\n";
    print "   Primera   : ";
    echo'<br/>';
    foreach ($random1 as $bit) {
        print "$bit ";
    }
    echo'<br/>';
    //segunda matriz de bits aleatorios
    $inicial2 = [];
    for ($i = 0; $i < $num; $i++) {
        $inicial2[$i] = rand(0, 1);
    }
    //se imprime la segunda matriz
    print "   Segunda   : ";
    echo'<br/>';
    foreach ($inicial2 as $bit) {
        print "$bit ";
    }
    echo'<br/>';
    // Matriz con la conjunción lógica
    $result = [];
    for ($i = 0; $i < $num; $i++) {
        $result[$i] = ($random1[$i] == 1 && $inicial2[$i] == 1) ? 1 : 0;
    }
    //se imprime resultado
    print "Primera y Segunda: ";
    echo'<br/>';
    foreach ($result as $bit) {
        print "$bit ";
    }
    echo'<br/>';
    echo'<br/>';
}


?>