<?php 

	
	function mostrarNome($nome,$idade){

		echo '<b>nome eh: </b>'.$nome;
		echo '<br><b>idade eh: </b>'.$idade;
 
	}

	mostrarNome('James',29);

	function calculadora ($n1 = 14, $n2 = 29){
		echo '<br><b>number one: </b>'.$n1;
		echo '<br><b>number two: </b>'.$n2;
	}

	calculadora(10,11);
	
 ?>