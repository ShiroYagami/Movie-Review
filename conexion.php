<?php
include ("conexion.php"); //Este archivo DEPENDE del archivo de conexi�n
if($_POST) { // Condicional creado para obtener POST	
//Creamos la variables que contienen los nombres de los atributos del formulario

$id =$_POST['form'];
$mail=$_POST['email'];
$usu=$_POST['name];
$cotra=$_POST['password'];

//Creamos la consulta SQL, para insertar un nuevo registro
$sql="INSERT INTO pagina(name, email, password, ) VALUES ('$mail','$usu','$cotra')";
 
//Verificaci�n de la Conexi�n
if($connect->query($sql)===TRUE){
	echo "<h3>Guardado Exit�samente</h3>";
} else {
    echo "<h3>No se guardaron los datos</h3>" .$sql."<br>". $connect->error;
}
$connect->close();
} // /if $_POST
?>
