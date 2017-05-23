<?php 
header('content-type: application/json; charset=utf-8');
//en caso de json en vez de jsonp habría que habilitar CORS:
header("access-control-allow-origin: *");

include("conexion.php");

$idDestino=$_POST["id"];


$sentencia = "insert into reservas (estado_reserva, id_destino) values ('1', ".$idDestino.")";

$query = mysqli_query($conexion,$sentencia);

if ($query){
	echo "¡Se creo la reserva Éxitosamente!";

}else{
	echo "No fue posible crear la reserva";
}

mysqli_close($conexion);
 ?>