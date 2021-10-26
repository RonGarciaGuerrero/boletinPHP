<?php
$con = mysqli_connect("localhost","root","","directorio");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}else{
    echo "conectado a la BBDD";
}
//para generar el id he puesto en mysql admin al campo is le he dado a cambiar y he seleccionado el check de auto incremento AI


$query = "INSERT INTO myCity VALUES (NULL, 'Stuttgart', 'DEU', 'Stuttgart', 617000)";
mysqli_query($link, $query);

printf ("Nuevo registro con el id %d.\n", mysqli_insert_id($link));


/* close connection */
mysqli_close($link);
?>