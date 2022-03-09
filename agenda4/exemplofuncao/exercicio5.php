<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<title>Função com e sem retorno.</title>
</head>
<body>

<div class=" w3-center w3-animate-top w3-padding">

<?php

echo "Hoje é dia: " . date("d/m/Y") . "<br>";

?>

</div>




<div>

<div class=" w3-third w3-center w3-animate-top w3-padding">
<h2 class="w3-container w3-
teal ">Escolha qual tabuada você deseja Visualizar</h2>
<form class="w3-
container" method="post" action="exemploforaction.php">
<button class="w3-btn w3-blue-grey w3-margin w3-
jumbo" name="btn7">7</button>
<button class="w3-btn w3-blue-grey w3-margin w3-
jumbo" name="btn8">8</button>
<button class="w3-btn w3-blue-grey w3-margin w3-
jumbo" name="btn9">9</button>
<br>
<button class="w3-btn w3-blue-grey w3-margin w3-
jumbo" name="btn4">4</button>
<button class="w3-btn w3-blue-grey w3-margin w3-
jumbo" name="btn5">5</button>
<button class="w3-btn w3-blue-grey w3-margin w3-
jumbo" name="btn6">6</button>
<br>
<button class="w3-btn w3-blue-grey w3-margin w3-
jumbo" name="btn1">1</button>
<button class="w3-btn w3-blue-grey w3-margin w3-
jumbo" name="btn2">2</button>
<button class="w3-btn w3-blue-grey w3-margin w3-
jumbo" name="btn3">3</button>
<br>
<button class="w3-btn w3-blue-grey w3-margin w3-
jumbo" name="btn0">0</button>
</form>
</div>

<div class=" w3-third w3-center w3-animate-top w3-padding">
<h2 class="w3-container w3-
teal ">Digite qualquer valor para gerar sua tabuada</h2>
<form class="w3-
container" method="post" action="exemploWhileAction.php">
<label class="w3-text-
teal"><b>Valor para cálculo da tabuada</b></label>
<input class="w3-input w3-border w3-light-
grey" name="txtValor" type="number" placeholder="Digite ex: 6">
<br>
<button class="w3-btn w3-blue-
grey" name="btnCalcular">Calcular</button>
</form>
</div>

<div class=" w3-third w3-center w3-animate-top w3-padding">
<h2 class="w3-container w3-
teal ">Clique para Gerar todas as Tabuadas do 0 a 10</h2>
<form class="w3-
container" method="post" action="exemploDoWhileAction.php">
<br>
<button class="w3-btn w3-blue-grey w3-margin w3-
jumbo" name="btnGerar">Tabuadas</button>
</form>
</div>

</div>

</body>
</html>