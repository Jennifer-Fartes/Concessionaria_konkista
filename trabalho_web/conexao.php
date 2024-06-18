<?php
	include_once("conexao.php");
	$servidor = 'localhost';
	$usuario = "root";
	$senha = "";
	$dbname = "bdalugarc";
	
	//Criar a conexao
	$conn = new mysqli($servidor, $usuario, $senha, $dbname);
	