<?php 
header('content-type: application/json; charset=utf-8');
//en caso de json en vez de jsonp habría que habilitar CORS:
header("access-control-allow-origin: *");

include("conexion.php");

$destino=$_POST["destino"];
$aerolinea=$_POST["aerolinea"];
$precio=$_POST["precio"];
$tiempovuelo=$_POST["tiempovuelo"];
$servicio=$_POST["servicio"];


$sentencia = "insert into destinos(destinos, aerolinea, precio, tiempovuelo, servicios)
values ('".$destino."', '".$aerolinea."', '".$precio."', '".$tiempovuelo."', '".$servicio."')";

$query = mysqli_query($conexion,$sentencia);

if ($query){
	echo "Se creo el destino ".$destino." ¡Exitosamente!";

}else{
	echo "No fue posible crear el destino: ".$destino;
}

mysqli_close($conexion);
 ?>