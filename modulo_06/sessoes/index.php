<?php 
	session_start();
	//$_SESSION['nome'] = 'Thiago';

	setcookie('name','Thiago', time() + (60*60*24), '/');

	echo $_COOKIE['name'];

 ?>