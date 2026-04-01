triangulo.php
<html>
	<head>
		<meta charset="utf-8">
		<title> X + Y </title>
		<style>
		p { font-size: 40px;
		color:red;}
		body {background:url(https://www.hitpaw.com.br/ai-photo-generator-tips/peter-griffin-ai-feeding-kids.html);
			  background-repeat: no-repeat;
			  background-size: 100%;}
		</style>
	</head>
	<body>
		<?php
		$altura = $_GET["a"];
		$base = $_GET["b"];
		$resultado=($altura * $base)/2;
		echo "<p> A área do triangulo é: $resultado";

		?>
	</body>
</html>
<!-- figura de fundo e formatar textos -->



trianguloForm.php
<form action="triangulo.php" method="get">
 <p>Altura:   <input type="text" name="a" /></p>
 <p>Largura:  <input type="text" name="b" /></p>
 <p><input type="submit" value="enviar" /></p>
</form>
