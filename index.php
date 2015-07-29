 <?php
echo "CONEXION A LA BASE DE DATOS";
$URL ="sql5.freemysqlhosting.net";
$database = "sql585297";
$usuario = "ql585297";
$password = "wW7*jF7%";
$port = 3306;
// CREAR CONNECCION
$conexion =mysqli_connect(
$URL,
$usuario,
$password,
$database,
$port);                                  
 if(!$conexion){
die ("Finalizo la conexion");
}  
echo ("conexion exitosa");  
$result = mysqli_query($conexion,$query); 
while ($row = mysqli_fetch_assoc($result)) {
	echo $row ['id']." " .$row['nombre'].''.
	$row  ['descripcion'];




                            	
                            } 
mysqli_close (conexion);                                                      
?>
