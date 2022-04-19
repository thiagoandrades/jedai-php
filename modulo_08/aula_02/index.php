<?php 

	$pdo = new PDO('mysql:host=localhost;dbname=modulo_8','root','');

	$nome=$_POST['nome'];
	$sobrenome=$_POST['sobrenome'];
	$momento_registro=$_POST['momento_registro'];
	
	$sql = $pdo->prepare("INSERT INTO 'clientes' VALUES (null,?,?,?)");



	$sql->execute();

 ?>