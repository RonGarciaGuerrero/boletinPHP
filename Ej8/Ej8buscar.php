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

$apellidos = $_GET['apellidos'];
$telefono = $_GET['telefono'];
$result = NULL;

if (array_key_exists("blablabla", $apellidos)) { 
  if ($result = $mysqli_query ($conn,"SELECT * FROM CLIENTES WHERE INSTR(UPPER(APELLIDOS), '$apellidos') = 1)"){//lo intenté con ? pero no logré que funcionara
    echo "Los resultados de la busqueda son: ".mysqli_num_rows($result);
    //todos los resultados
    //mysqli_free_result($result);
  }else{
    echo "No hay resultados";
  }
} else if (!is_null($apellidos)){
  consulta por blablabla2 
} else { 
  echo "error"; 
}

// $result = NULL;
// if (buscando por apellido){
//     result = consulta sql por apellido...;
// } else if (buscando por telefono) {
//     result = consulta sql por telefono...;
// }

// if (!is_null($result)){
//     pinto resultados;
// } else {
//     muestro error;
// }
mysqli_close($conn);
?>