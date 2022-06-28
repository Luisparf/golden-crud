<?php
include_once "connection.php";

try {

	$id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);

	$titulo = filter_var($_POST['titulo']);
	$solucao = filter_var($_POST['solucao']);
	// $foto = filter_var($_POST['foto']);
	$dir = "imagens/";
	$file = $_FILES["foto"];
	$destino = "$dir".$file["name"];

	if (move_uploaded_file($file["tmp_name"], $destino))
		echo "arquivo enviado com sucesso";
	
	else
		echo "erro, foto n pode ser enviada";



	$update = $connect->prepare("UPDATE login SET titulo = :titulo, solucao = :solucao, foto = :foto WHERE id = :id");
	$update->bindParam(':id',$id);
	$update->bindParam(':titulo', $titulo);
	$update->bindParam(':solucao', $solucao);
	$update->bindParam(':foto', $destino);
	$update->execute();

	header("location: index.php");




} catch (PDOException $e) {

	echo "Error ".$e->getMessage();
	
}

?>