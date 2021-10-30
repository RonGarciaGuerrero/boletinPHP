<!-- Autor: Ronald Garcia Guerrero -->
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
//para generar el id he puesto en mysql admin al campo is le he dado a cambiar y he seleccionado el check de auto incremento AI, en el script de sql le he puesto el auto incremento despues del tipo

// set parameters and execute
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$direccion = $_POST['direccion'];
$poblacion = $_POST['poblacion'];
$cp = $_POST['cp'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];

$sql = "INSERT INTO CLIENTES (NOMBRE, APELLIDOS, DIRECCION, POBLACION,CODIGOPOSTAL, TELEFONO, EMAIL) VALUES ('$nombre','$apellidos', '$direccion', '$poblacion', '$cp', '$telefono', '$email')"; //"insert into clientes ..."

if (mysqli_query ($conn, $sql)){
  echo "Guardado correctamente";
}else{
  echo "Error guardando: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>