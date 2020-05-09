<?php
require "ConexionDatos.php";


$objConexion=Conectarse();

$sql="select * from empleados where empIdentificacion='10'";

$resultado = $objConexion->query($sql);


if ($empleados = $resultado->fetch_object())
 {
	 echo "<br> Nombre Empleado: ".$empleados->empNombre;
	 echo "<br> Fecha Ingreso Empleado: ".$empleados->empFechaIngreso;
	 echo "<br> Genero del Empleado: ".$empleados->empGenero;
	 
 }
 else 
     echo "No existe empleado con esa identificacion";





?>