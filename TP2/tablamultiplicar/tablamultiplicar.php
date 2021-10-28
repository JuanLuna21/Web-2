<link rel="stylesheet" href="css/style.css">
<?php

function tablamultiplicar($num){

    $num = $_GET['num'];
    
    echo "<table class='table'>";
    
    echo"<tbody>";
        for ($i=1; $i <($num+1); $i++) { 
            echo "<tr>";
            for ($j=1; $j < ($num+1); $j++) { 
                if((($i==$j) || ($i == 1)) || ($j == 1)) {
                    echo "<td class='resaltado'>". $i*$j."</td> "; //
                }
                else{
                    echo "<td>". $i*$j . "</td>";
                }
            }
            echo "</tr>";
        }
    echo"</tbody>";
    echo "</table>";
}


