<?php
require_once('bd_credenciales.php');
$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
$result = '';
if ($mysqli->connect_errno) {
	echo "Error de la conexion";
	exit;
}
function resultado(){
	global $mysqli, $result;
	$sql = 'SELECT * FROM datos';
	return $mysqli->query($sql);
}
function alta($numsin,$arete,$fecha,$sx,$rz,$rc,$empadre,$mami,$papi){
	global $mysqli;
	$sql = "INSERT INTO datos (numsin, arete, fecha, sx, rz, rc, empadre, mami, papi) VALUES ('{$numsin}', '{$arete}', '{$fecha},', '{$sx}', '{$rz}', '{$rc}', '{$empadre}', '{$mami}', '{$papi}')";
    $mysqli->query($sql);
    echo "<script language='javascript'> alert(\"Datos Guardados\");self.location='index.php';</script>";
}