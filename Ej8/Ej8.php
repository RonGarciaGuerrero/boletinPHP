<?php
// Create connection
$conn = new mysqli("localhost","root","","directorio");
//mysqli_connect("localhost","root","","directorio")
// Check connection
if ($conn->connect_error) {
  die("Conexion fallida: ".$conn->connect_error);
  // echo "Failed to connect to MySQL: " . mysqli_connect_error();
  // exit();
}else{
    echo "conectado a la BBDD";
}
//echo $conn;
//para generar el id he puesto en mysql admin al campo is le he dado a cambiar y he seleccionado el check de auto incremento AI, en el script de sql le he puesto el auto incremento despues del tipo

// prepare and bind
$stmt = mysqli_prepare( $conn,"INSERT INTO DIRECTORIO (NOMBRE, APELLIDOS, DIRECCION, POBLACION,CODIGOPOSTAL, TELEFONO, EMAIL) VALUES (?, ?, ?, ?, ?, ?, ?)");
echo mysqli_stmt_error($stmt);
//https://www.php.net/manual/es/mysqli-stmt.bind-param.php
// i	la variable es de tipo entero
// d	la variable es de tipo double
// s	la variable es de tipo string
// b	la variable es un blob y se envía en paquetes

$stmt->bind_param("sssssis", $nombre, $apellidos, $direccion, $poblacion, $cp, $telefono, $email);

// set parameters and execute
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$direccion = $_POST['direccion'];
$poblacion = $_POST['poblacion'];
$cp = $_POST['cp'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];

//$sql = "insert into clientes ..."
//if (mysqli_query ($conn, $sql)){guardado correctamente}else{no...}

$stmt->execute();

echo "New records created successfully";

$stmt->close();
$conn->close();
?>