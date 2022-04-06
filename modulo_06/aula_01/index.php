<?php 
	$arr = array('thiago','joao','felipe','mario');
/*
	foreach ($arr as $key => $value) {
		echo $key;
		echo '=>';
		echo '<hr>';
	}
*/

	$total = count($arr);

	for ($i=0; $i <$total ; $i++) { 
		echo $arr[$i];
	}


 ?>