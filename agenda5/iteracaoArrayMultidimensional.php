<?php

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
echo '<td class="w3-center">'.$item.
'</td>';
}

echo '</tr>';
}

echo '</table>';

?>