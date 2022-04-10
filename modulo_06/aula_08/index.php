<?php

	//funcoes para array

	$array1 = array("chave1" => "valor1", "chave2" => "valor2");
	$array2 = array("chave3" => "valor3", "chave4" => "valor4");
	$result = array_merge($array1, $array2);
	print_r($result);



	$array1 = array('azul'  => 1, 'vermelho' => 2, 'verde'   => 3, 'roxo'  => 4);
	$array2 = array('verde' => 5, 'azul'     => 6, 'amarelo' => 7, 'ciano' => 8);

	var_dump(array_intersect_key($array1, $array2));


?>