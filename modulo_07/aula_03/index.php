<?php 

	final class Filha{

		protected function funcaoTeste(){
			echo 'chamando funcao teste';
		}

		public function mostrarOla(){
			echo 'ola mundo';
		}
	}


	class Pai extends Filha{
		public function mostrarTchau(){
			echo 'tchau mundo';
		}

	}

	$pai = new Pai;
	$pai->mostrarTchau();

	$filha = new Filha();

	$filha->mostrarOla();
 ?>