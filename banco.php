<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>Primeiro PHP</title>
	
</head>
<body>
	<?php
		$bdd = new PDO('mysql:host=localhost;dbname=endomed', 'root', 'root123');
		
	?>
	<form action="index.php" method="get">
		<input type="text" name="valor1" id="txt1"/>
		
		<p id="span1">aaaaa111aa</p>
	</form>
	<a href="index.php">home</a>
</body>
</html>