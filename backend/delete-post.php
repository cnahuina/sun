<?php 
include('util/conexion.php');
	$id_post = $_GET['id_post'];

	$sql ="DELETE FROM post WHERE id_post=:id_post";
	$query = $pdo->prepare($sql);

	$query -> execute([
		'id_post' => $id_post
	]);

	header("Location:index.php");

?>