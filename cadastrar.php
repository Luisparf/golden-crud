<?php
include_once "connection.php";

try {

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



	$insert = $connect->prepare("INSERT INTO login (titulo, solucao, foto) VALUES (:titulo, :solucao, :foto)");
	$insert->bindParam(':titulo', $titulo);
	$insert->bindParam(':solucao', $solucao);
	$insert->bindParam(':foto', $destino);
	$insert->execute();

	header("location: index.php");




} catch (PDOException $e) {

	echo "Error ".$e->getMessage();
	
}

?>