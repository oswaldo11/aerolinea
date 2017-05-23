<?php 
header('content-type: application/json; charset=utf-8');
//en caso de json en vez de jsonp habría que habilitar CORS:
header("access-control-allow-origin: *");
include ("conexion.php");

$tiempo = $_POST["tiempo"];

$sentencia= "select * from destinos where tiempovuelo = '". $tiempo ."' ";

$query = mysqli_query ($conexion,$sentencia);

$cantidadRegistros = mysqli_num_rows($query);

if($cantidadRegistros > 0){
$arrayConsulta = array();
$i = 0;
while($row = mysqli_fetch_array($query)){
    $arrayConsulta[$i] = $row;
    $i++;
}
echo json_encode($arrayConsulta);

}else{
	echo "No hay registros";
}


mysqli_close($conexion);
 ?>