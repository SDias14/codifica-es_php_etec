<?php

$frutas= array("uva","laranja","maçã");
print_r($frutas);
echo "<br>";
array_unshift($frutas,"Manga", "acerola", "morango"); //adiciona indices no inicio 
echo "<br>";
print_r($frutas);

?>