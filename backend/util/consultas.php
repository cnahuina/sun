<?php 
	include("util/conexion.php");
// Crear la consulta
	$selectCat = 'SELECT id_cat, categoria FROM categ_post';
	// we have to tell the PDO that we are going to send values to the query
	$stmt = $pdo->query($selectCat);
	// Extract the values from $stmt
	$rowsCat = $stmt->fetchAll();
	if (empty($rowsCat)) {
		$result = "No se encontraron resultados !!";
	}

	$selectUsu ='SELECT id_usuario, usuario FROM usuario';
	$stmt = $pdo->query($selectUsu);
	$rowsAutor = $stmt->fetchAll();
	if(empty($rowsAutor)){
		$result ="No se encontraron resultados!!";
	}
?>