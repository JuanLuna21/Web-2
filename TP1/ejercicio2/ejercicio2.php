<?php

$arreglo = array("primero","segundo", "tercero");

echo "<ul>";

foreach ($arreglo as $orden) {
    echo "<li>" . $orden. "</li>";
}

echo "</ul>";