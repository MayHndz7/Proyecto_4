<?php
	include_once('funcionalidades.php');
	$numsin = $_POST['numsin'];
	$arete = $_POST['arete'];
	$fecha = $_POST['fecha'];
	$sx = $_POST['sx'];
	$rz = $_POST['rz'];
	$rc = $_POST['rc'];
	$empadre = $_POST['empadre'];
	$mami = $_POST['mami'];
	$papi = $_POST['papi'];
	alta($numsin,$arete,$fecha,$sx,$rz,$rc,$empadre,$mami,$papi);
	die();
?>