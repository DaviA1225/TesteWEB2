<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>Primeiro PHP</title>
	<style>
		h1{
			color: #ffffff;
		}
		p{
			color: #ffffff;
		}
		body{
			 background-color: #000000;
		}
	</style>
	<script>
		function teste(){
			//var valor1 = document.getElementsByName("txt1");
			var valor1 = document.getElementById("txt1").value;
			var valor2 = document.getElementById("txt2").value;
			var resultado = parseInt(valor1) + parseInt(valor2);
			alert(valor1 + " <-val1 || val2-> " + valor2+ " resultado-> " + resultado);
			document.getElementById("span1").innerHTML = resultado;
		}
	</script>
</head>
<body>
	<?php
		$val1 = $_GET["valor1"];
		$val2 = $_GET["valor2"];
		$result = $val1 + $val2;
		echo "<h1>aa - $result </h1>";
		
	?>
	<form action="index.php" method="get">
		<input type="text" name="valor1" id="txt1"/>
		<input type="text" name="valor2" id="txt2"/>
		<input type="submit" value="enviar" onclick="teste();"/>
		<p id="span1">aaaaa111aa</p>
		<a href="banco.php">banco</a>
	</form>
</body>
</html>