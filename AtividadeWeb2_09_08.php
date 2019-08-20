<html>
	<head>
		<title>Atividade 1 de Web 2</title>
		<meta charset="UTF-8"/>
		<script>
			function verificaIdade(){
				var idadeNoJS = document.getElementById('idadeID').value;
				//alert(idadeNoJS < 18);
				if(idadeNoJS < 18){
					document.getElementById('msgIdade').innerHTML = "Negada a entrada";
				}
			}

			function saidaNome(){	
				var nomeNoJS = document.getElementById('nomeID').value;
				alert(nomeNoJS);
			}
		</script>
	</head>
	<body>
		<form action="AtividadeWeb2_09_08.php" method="POST">
			<label>Nome: </label><input type="text" onblur="saidaNome();" name="nome" id="nomeID"/>
			<label>Idade: </label><input type="text" name="idade" id="idadeID" onblur="verificaIdade();"/>
			<p id="msgIdade"></p>
			<input type="submit" value="Salvar" />
		</form>

		<?php
			if(! empty($_POST)){
				echo $_POST['nome'];
			}
		?>
	</body>
</html>