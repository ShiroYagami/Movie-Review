<?php   
$server = "localhost"; //Aqu� puede ser la IP intercambiada por la palabra "localhost"
$user = "root"; //usuario por lo general siempre es root en servidores gratuitos
$pass = ""; //Contrase�a del servidor web
$db = "proyecto"; //nombre de tu base de datos
 
// conexi�n con la base de datos
$connect = new mysqli($server, $user, $pass, $db);
// verificar conexion
if($connect->connect_error) {
  die("Connection Failed : " . $connect->connect_error);
} else {
  // echo "Conectado satisfactoriamente";
}
?>
