<?php
include_once "connection.php";

try {
	
	// execução do sql
	$consult = $connect->query("SELECT * FROM login");

	echo "<a href='formCadastro.php'>Novo Cadastro</a><br><br>Lista:<br>";

	echo "<table border='1'><tr><td>Título</td><td>Foto</td><td>Solução</td><td>Ações</td></tr>";

	while ($line = $consult->fetch(PDO::FETCH_ASSOC)) { // enquanto a linha for igual aos registros da consulta...
		// code...
		echo "<tr><td>$line[titulo]</td><td>$line[solucao]</td><td><img src='$line[foto]' height='50' width='50' ></td><td><a href='formEditar.php?id=$line[id]'>Editar</a> - <a href='excluir.php?id=$line[id]'>Excluir</a></td></tr>";
	}

	echo "</table>";

	echo $consult->rowCount()." Registros exibidos";



} catch (PDOException $e) {
	
	echo $e->getMessage();
}

?>