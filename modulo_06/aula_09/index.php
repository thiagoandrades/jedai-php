<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulário PHP</title>
</head>
<body>
	<?php 
		$nome = @$GET_['nome'];
		$email = @$GET_['email'];

		echo $nome;
		echo $email;

	 ?>
	<form>
		<input type="text" name="nome">
		<input type="text" name="email">
		<input type="submit" name="acao" value="enviar">

	</form>
</body>
</html>