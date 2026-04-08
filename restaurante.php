
<!DOCTYPE html>
<html>
<head>
    <title>Resultado</title>
    <style>
        body {
            height: 100vh;
  			width: 100%;
  			display: flex;
  			justify-content: flex-start;
  			flex-direction: column;
  			align-items: center;
  			background-color: rgb(48, 115, 192);
  			transition: 0.8s all;
  			border-radius: 10px;
        }
		.header-container {	
			display: flex;
  			justify-content: space-between;
  			align-items: center;
  			width: 80%;
		}

        .caixa {
            background: white;
            padding: 20px;
            margin: 50px auto;
            width: 300px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px #802978;
        }
    </style>
</head>
<body>
	<div class = "header-container
<form action="retangulo.php" method="get">
<h1> Quantidades consumidas</h1>
<p>Refrigerante R$3,00 <input type="text" name="a" /></p>
<p>Suco R$5,50: <input type="text" name="b" /></p>
<p>Cheese Salada R$5,50: <input type="text" name="c" /></p>
<p>Cheese Burger R$4,00: <input type="text" name="d" /></p>
<p>Cheese Egg R$4,90: <input type="text" name="e" /></p>
<p>Cheese Calabresa R$8,00: <input type="text" name="f" /></p>
<p>Cheese Bacon R$9,00 : <input type="text" name="g" /></p>
<p>Cheese Tudo R$12,00: <input type="text" name="h" /></p>
 
<p><input type="submit" /></p>
</form>

<?php

$refriQuantidade = (float) ($_GET["a"] ?? 0);
$sucoQuantidade = (float) ($_GET["b"] ?? 0);
$cheeseSaladaQuantidade = (float) ($_GET["c"] ?? 0);
$cheeseBurgerQuantidade = (float) ($_GET["d"] ?? 0);
$cheeseEggQuantidade = (float) ($_GET["e"] ?? 0);
$cheeseCalabresaQuantidade = (float) ($_GET["f"] ?? 0);
$cheeseBaconQuantidade = (float) ($_GET["g"] ?? 0);
$cheeseTudoQuantidade = (float) ($_GET["h"] ?? 0);

$refriValor = 3.00;
$sucoValor = 5.50;
$cheeseSaladaValor = 5.50;
$cheeseBurgerValor = 4.00;
$cheeseEggValor = 4.90;
$cheeseCalabresaValor = 8.00;
$cheeseBaconValor = 9.00;
$cheeseTudoValor = 12.00;

$refri = $refriQuantidade * $refriValor;
$suco = $sucoQuantidade * $sucoValor;
$cheeseSalada = $cheeseSaladaQuantidade * $cheeseSaladaValor;
$cheeseBurger = $cheeseBurgerQuantidade * $cheeseBurgerValor;
$cheeseEgg = $cheeseEggQuantidade * $cheeseEggValor;
$cheeseCalabresa = $cheeseCalabresaQuantidade * $cheeseCalabresaValor;
$cheeseBacon = $cheeseBaconQuantidade * $cheeseBaconValor;
$cheeseTudo = $cheeseTudoQuantidade * $cheeseTudoValor;

// Total
$total = $refri + $suco + $cheeseSalada + $cheeseBurger + $cheeseEgg + $cheeseCalabresa + $cheeseBacon + $cheeseTudo;
?>

    <div class="caixa">
        <h1>Total da Conta</h1>
        <?php
        echo "<p>Total gasto: R$ " . number_format($total, 2, ',', '.') . "</p>";
        ?>
    </div>
</body>
</html>