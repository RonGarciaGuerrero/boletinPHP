<!-- Autor: Ronald Garcia Guerrero -->
<?php
$nombre=$_POST['campo1'];
//$bday = new DateTime('11.4.1987'); 
$bday = new DateTime($_POST['birthday']); // Your date of birth
$today = new Datetime(date('d.m.y'));//la fecha de hoy
$diff = $today->diff($bday);

printf($nombre.'. Su edad es : %d años, %d meses, %d días', $diff->y, $diff->m, $diff->d);
printf("\n");
?>