<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" 
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css
    content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    




<?php

$produtos = array(
    array("Processador","900"),
    array("Mouse","15"),
    array("Teclado","20"),
    array("Impressora","500"),
    array("Monitor","450"),
    array("Placa de Vídeo","1500"),
    array("Memória RAM 8G","500"),
    array("Placa Mãe","600"),
    array("Mouse Pad","25"),
    array("SSD","245"),
    );

    echo $produtos[0][0];
    
    echo "<br>";

    $produtosAssociativo = array(
        array("nome"=> "Processador","valor"=> "900" ),
        array("nome"=> "Mouse","valor"=> "15" ),
        array("nome"=> "Teclado","valor"=> "20" ),
        array("nome"=> "Impressora","valor"=> "500" ),
        array("nome"=> "Monitor","valor"=> "450" ),
        array("nome"=> "Placa de Vídeo","valor"=> "1500" ),
        array("nome"=> "Memória RAM 8G","valor"=> "500" ),
        array("nome"=> "Placa Mãe","valor"=> "600" ),
        array("nome"=> "Mouse Pad","valor"=> "25" ),
    );
    

        echo $produtosAssociativo[1]['nome'] ;

      
        echo '<table class="w3-table-all w3-hoverable w3-text-black">';
        echo '<tr class="w3-teal ">';
        echo '<th class="w3-center"> Nome</th>';
        echo '<th class="w3-center"> Valor</th>';
        echo '</tr>';
        foreach($produtos as $produto)
        {
        echo '<tr>';
        foreach($produto as $item)
        {
        echo '<td class="w3-center">'.$item.'</td>';
        }
        echo '</tr>';
        }
        echo '</table>';


        echo "<br>";


        echo '<table class="w3-table-all w3-hoverable w3-text-black">';
echo '<tr class="w3-teal ">';
echo '<th class="w3-center"> Nome</th>';
echo '<th class="w3-center"> Valor</th>';
echo '</tr>';
foreach($produtosAssociativo as $produto)
{
echo '<tr>';
echo '<td class="w3-
center">'.$produto['nome'].'</td>';
echo '<td class="w3-
center">'.$produto['valor'].'</td>';
echo '</tr>';
}
echo '</table>';



?>

</body>
</html>