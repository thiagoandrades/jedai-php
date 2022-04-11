<?php 
	
	include('Exemplo.class.php');

	$exemplo = new Exemplo();

	$exemplo->var2 = 'Thiago';

	echo $exemplo->var2; 

	$exemplo2 = new Exemplo();

	echo $exemplo2->var2;

	echo Exemplo::$var3;

 ?>  