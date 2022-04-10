<?php 

	//inicio de PHP Orientado a Objetos
	
	class Pessoa{
	//objeto pessoa
		private $nome = 'Thiago';
		private $idade = '29';
		private $peso = '120 kg';


		public function crescer(){
			$this->comer();	
			echo '<br>estou crescendo';		
		}

		private function comer(){
			echo 'estou comendo';
		}
	}


	//instancia

	$pessoa = new Pessoa;
	$pessoa2 = new Pessoa;

	$pessoa->crescer();

 ?>