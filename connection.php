<?php

try{
	// Faz conexão com o banco de dados
	$connect = new PDO("mysql:host=localhost;port=3306;dbname=crud;", "root", "root");
	echo "Conectado com sucesso!<br><br>"; 

}catch (PDOException $e){

	// Caso ocorra erro na conexão com o banco
	echo 'Falha ao conectar com o banco de dados: '.$e->getMessage(); 

}

?>