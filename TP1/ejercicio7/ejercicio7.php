<?php

$money = $_REQUEST ['money'];

$arrays = array('enero','febrero','marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre');

$percentage = 0.1;

echo "<table>";
echo "<tbody>";

for ($i=0; $i < 12; $i++) { 

$calculo = ($percentage * $money) + $money;

echo "<tr>";

echo "<td>$arrays[$i]</td>";

echo "<td>($calculo)</td>";

$money = $calculo;

echo "</tr>";

}

echo "</tbody>";
echo "</table>";