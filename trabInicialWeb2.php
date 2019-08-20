<html>
<head>
	<title>Primeira Atividade Web 2</title>
	<script>
		function teste(){
			var idade = document.getElementById('idade').value;
			alert(idade);
			if(idade > 18){
				alert("maior");
			}
			if(idade == "asdf"){
				alert("igual asdf");
			}

			document.getElementById('turma').value = idade;
			document.getElementById('verificaIdade').innerHTML = "testestestes";
		}
	</script>
</head>
<body>
	<label onclick="teste();">Nome:</label><input type="text"/>
	<label>Idade:</label><input id="idade" type="text"/>
	<p id="verificaIdade"></p>
	<label>Turma:</label><input id="turma" type="text"/>
	<input type="button" onclick="teste();" />
	
	<?php
		if(empty($_POST)){
			echo 'post Vazio';
		}
	?>
</body>
</html>