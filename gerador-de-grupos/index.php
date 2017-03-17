<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Gerador de Grupos</title>
</head>
<body>
	<h1>Gerador de Grupos</h1>
		<form action="gerador.php" method="POST">
			<h3>Quantidade de Temas: <input type="number" name="tema" min="4" max="40"></h3>
			<?php include 'gerador.php' ?>
			<br><input type="submit" name="submit" Value="Gerar"/>
		</form>
</body>
</html>

    