<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<title>atividade online</title>
</head>
<body>

<div class="w3-card-4">

<header class=" w3-center w3-container w3-blue">
  <h1> 8° ANO A </h1>
</header>

<p>


</p>




<?php

$alunos = array(
    array("nome"=> "Aline","primeiroSemestre"=> 10, "segundoSemestre"=> 9.5),
    array("nome"=> "Alfredo","primeiroSemestre"=> 8, "segundoSemestre"=> 5),
    array("nome"=> "Carla","primeiroSemestre"=> 5, "segundoSemestre"=> 6.5),
    array("nome"=> "César","primeiroSemestre"=> 9, "segundoSemestre"=> 9),
    array("nome"=> "Daniel","primeiroSemestre"=> 10, "segundoSemestre"=> 7),
    array("nome"=> "Esnar","primeiroSemestre"=> 8, "segundoSemestre"=> 6),
    array("nome"=> "Henzo","primeiroSemestre"=> 6, "segundoSemestre"=> 8),
    array("nome"=> "Pablo","primeiroSemestre"=> 7, "segundoSemestre"=> 5),
    array("nome"=> "Wallace","primeiroSemestre"=> 8, "segundoSemestre"=> 7),
    array("nome"=> "Zulmira","primeiroSemestre"=> 10, "segundoSemestre"=> 6)
 );

 echo '<table class="w3-table-all w3-hoverable w3-text-black">';
 echo '<tr class="w3-teal ">';
 echo '<th class="w3-center"> Nome</th>';
 echo '<th class="w3-center"> Primeiro Semestre</th>';
 echo '<th class="w3-center"> Segundo Semestre</th>';
 echo '</tr>';
 
 foreach($alunos as $aluno)
 
 {
 
     echo '<tr>';
 foreach($aluno as $item)
 
 {
 echo '<td class="w3-center">'.$item.
 '</td>';
 }
 
 echo '</tr>';
 }
 
 echo '</table>';
 
 ?>







</div>
</html>