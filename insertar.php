 <?php
include ("conexion.php"); //Este archivo DEPENDE del archivo de conexión
if($_POST) { // Condicional creado para obtener POST	
//Creamos la variables que contienen los nombres de los atributos del formulario

$id = round(1,99);
$name=$_POST['name'];
$email=$_POST['email'];
$contra=$_POST['password'];
//Creamos la consulta SQL, para insertar un nuevo registro
$sql="INSERT INTO proyecto(idx, name, email, password)VALUES ('$id', '$name', '$email', '$contra')";
 
//Verificación de la Conexión
if($connect->query($sql)===TRUE){
	echo "<h3>Guardado Exitósamente</h3>";
} else {
    echo "<h3>No se guardaron los datos</h3>" .$sql."<br>". $connect->error;
}
$connect->close();
} // /if $_POST
?>
