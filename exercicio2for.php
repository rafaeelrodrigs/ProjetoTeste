<html>
	<head><title>Exercicio 2 FOR Dia 28/08</title></head>
<style>
	input{
		background-color:white;
	}
	#p1{
		color:black;
	}
	.imagem{
		background-image: url(https://images3.alphacoders.com/273/thumb-1920-273289.jpg);
		font-size:25px;
		color:black;
		text-align:center;
		background-attachment: fixed;
	}
</style>
<body class="imagem">
	<!--2-Crie um programa de uma tabuada(tabuada do 1). Faça uma página solicitando um valor para o qual será feita a tabuada do mesmo. A tabuada do número enviado
	será feita de 1 até 10 e deverá ser apresentada da seguinte forma: 
		Expressão	| 	Resultado-->
		<?php
			$numero=$_POST["numero"];
			echo"Expressão | Resultado<p>";
			for($contador=0;$contador<=10;$contador++){
				$tabuada=$numero*$contador;
				echo"$numero x $contador = $tabuada<p>";
			}
		?>
</body>
</html>