<?php
include_once "connection.php";

try {

	$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

	$delete = $connect->prepare("DELETE FROM login  WHERE id = :id");
	$delete->bindParam(':id',$id);
	$delete->execute();

	header("location: index.php");




} catch (PDOException $e) {

	echo "Error ".$e->getMessage();
	
}

?>