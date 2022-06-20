 <?php
include ("conexion2.php"); //Este archivo DEPENDE del archivo de conexión
if($_POST) { // Condicional creado para obtener POST	
//Creamos la variables que contienen los nombres de los atributos del formulario

$id = round(1,99);
$pe=$_POST['Pelicula'];
$ge=$_POST['Genero'];
$lin=$_POST['Link'];
//Creamos la consulta SQL, para insertar un nuevo registro
$sql="INSERT INTO peliculas(id, pelicula, genero, link )VALUES ('$id', '$pe', '$ge', '$lin')";
 
//Verificación de la Conexión
if($connect->query($sql)===TRUE){
	echo "<h3>Guardado Exitósamente</h3>";
} else {
    echo "<h3>No se guardaron los datos</h3>" .$sql."<br>". $connect->error;
}
$connect->close();
} // /if $_POST
?>
