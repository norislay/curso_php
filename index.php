 <?php
echo "CONEXION A LA BASE DE DATOS";
$URL ="sql5.freemysqlhosting.net";
$database = "sql585297";
$usuario = "ql585297";
$password = "wW7*jF7%";
%port = 3306;
// CREAR CONNECCION
$conexion =mysql_connect(
$URL,
$usuario,
$password,
$database,
$port);                                  
 if(!$conexion{
die ("Finalizo la conexion");
}  
echo ("conexion exitosa");                               
?>
