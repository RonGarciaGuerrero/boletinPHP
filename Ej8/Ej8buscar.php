<?php
// Conección
$conn = mysqli_connect("localhost","root","","directorio");
// Check connection
if ($conn->connect_error) {
  die("Conexion fallida: ".$conn->connect_error);
  // echo "Failed to connect to MySQL: " . mysqli_connect_error();
  // exit();
}else{
    echo "conectado a la BBDD"."<br/>";
}

// asignacion de variables

$apellidos = array_key_exists('apellidos', $_GET) ? $_GET["apellidos"] : NULL;
$telefono = array_key_exists('telefono', $_GET) ? $_GET["telefono"] : NULL;
//"operador ternario" condicion ? valor_si_condicion_cierta : valor_si_condicion_falsa
//si viene la clave 'telefono' en el array llamado $_GET, entonces mete ese valor en $telefono; si no viene, entonces pon NULL"
$result = NULL;

if (!is_null($apellidos)){
  $result = mysqli_query ($conn,"SELECT * FROM CLIENTES WHERE INSTR(UPPER(APELLIDOS), '$apellidos') = 1");//lo intenté con ? pero no logré que funcionara;
} else if (!is_null($telefono)) {
  $result = mysqli_query ($conn,"SELECT * FROM CLIENTES WHERE TELEFONO = '$telefono'");
}

if (!is_null($result)){
  printf("La selección devolvió %d filas.\n", mysqli_num_rows($result));
  echo'<br/>';
  // $cont=mysqli_num_rows($result);
  // for($i=0;$i<=$cont;$i++) {
  //   echo $result[$i], '<br/>';
  // }
  while($row = mysqli_fetch_array($result))
     {
        print_r($row);
        echo'<br/>';
        echo'<br/>';
     }

  /* liberar el conjunto de resultados */
  mysqli_free_result($result);
} else {
  echo 'Error';
}

mysqli_close($conn);
?>