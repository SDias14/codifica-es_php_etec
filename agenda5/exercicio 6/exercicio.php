<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<title>Arrays</title>
</head>
<body>

<?php

$estados = array(
    array("nome"=> "rio grande do sul","valor"=> "RS" ),
    array("nome"=> "SANTA CATARINA","valor"=> "SC" ),
    array("nome"=> "PARANÁ","valor"=> "PR" ),
    array("nome"=> "SÃO PAULO","valor"=> "SP" ),
    array("nome"=> "MINAS GERAIS","valor"=> "MG" ),
    array("nome"=> "RIO DE JANEIRO","valor"=> "RJ" ),
    array("nome"=> "ESPÍRITO SANTO","valor"=> "ES" ),
    array("nome"=> "MATO GROSSO","valor"=> "MT" ),
    array("nome"=> "MATO GROSSO DO SUL","valor"=> "MS" ),
    array("nome"=> "RONDONIA","valor"=> "RO" ),
    array("nome"=> "TOCANTINS","valor"=> "TO" ),
    array("nome"=> "GOIAS","valor"=> "GO" ),
    array("nome"=> "DISTRITO FEDERAL","valor"=> "DF" ),
    array("nome"=> "BAHIA","valor"=> "BA" ),
    array("nome"=> "CEARÁ","valor"=> "CE" ),
    array("nome"=> "PERNAMBUCO","valor"=> "PE" ),
    array("nome"=> "PIAUÍ","valor"=> "PI" ),
    array("nome"=> "SERGIPE","valor"=> "SE" ),
    array("nome"=> "PARAIBA","valor"=> "PB" ),
    array("nome"=> "RIO GRANDE DO NORTE","valor"=> "RN" ),
    array("nome"=> "MARANHÃO","valor"=> "MA" ),
    array("nome"=> "ALAGOAS","valor"=> "AL" ),
    array("nome"=> "PARÁ","valor"=> "MS" ),
    array("nome"=> "AMAPÁ","valor"=> "AP" ),
    array("nome"=> "RORAIMA","valor"=> "RR" ),
    array("nome"=> "AMAZONAS","valor"=> "AM" ),
    array("nome"=> "ACRE","valor"=> "AC" ),
    array("nome"=> "MATO GROSSO DO SUL","valor"=> "MS" ),
 );

 echo '<table class="w3-table-all w3-hoverable w3-text-black">';
 echo '<tr class="w3-teal ">';
 echo '<th class="w3-center"> Nome</th>';
 echo '<th class="w3-center"> Sigla</th>';
 echo '</tr>';
 
 foreach($estados as $estado)
 
 {
 
     echo '<tr>';
 foreach($estado as $item)
 
 {
 echo '<td class="w3-center">'.$item.
 '</td>';
 }
 
 echo '</tr>';
 }
 
 echo '</table>';
 
 ?>




?>


</div>
</html>