 <?php
 require __DIR__.'/vendor/autoload.php';  
echo "CONEXION A LA BASE DE DATOS";
$URL ="sql5.freemysqlhosting.net";
$database = "sql585297";
$usuario = "sql585297";
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
$query= "select* from demo ";
$result = mysqli_query($conexion,$query); 
while ($row = mysqli_fetch_assoc($result)) {
	echo $row ['id']." " .$row['nombre'].''.
	$row  ['descripcion'];
                            	
                            } 
mysqli_close (conexion);  
$response = Unirest\Request::get("https://bestapi-waze-unoffical-free-v1.p.mashape.com/addressList?address=Universidad+de+Panama",
  array(
    "X-Mashape-Key" => "ZA8k3CJvxdmshT0XPS3S6WV6vnfwp1hj5F9jsnNujBw5cKjh2Y",
    "Accept" => "application/json"
  )
);
echo  $response->raw_body;
$response = Unirest\Request::get("https://bestapi-waze-unoffical-free-v1.p.mashape.com/routes?end=156+5th+Avenue%2C+New+York%2C+NY+10010&start=6+East+57th+Street%2C+New+York%2C+NY+10022",
  array(
    "X-Mashape-Key" => "ZA8k3CJvxdmshT0XPS3S6WV6vnfwp1hj5F9jsnNujBw5cKjh2Y",
    "Accept" => "application/json"
  )
);
echo  $response->raw_body;
?>
