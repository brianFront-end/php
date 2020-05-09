<?php //Datos de conexión a la base de datos
function Conectarse()
{
 $Conexion= new MySQLi("localhost","root","","empresa");

 if($Conexion->connect_errno)
 	echo "Probleamas de Conexion". $Conexion->connect_error;
 else
 	//echo "Estamos Conectados al Servidor :V"
 	return $Conexion;

}
?>

