<?php

function ShowHome(){
    echo'
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculator</title>
</head>
<body>
    <a href="pi">Pi</a>
    <a href="about">about</a>
    <form action="router.php" method="get">

            <input type="number" name="op1" placeholder="">

        <select name="operacion">

            <option value="sumar">+</option>
            <option value="restar">-</option>
            <option value="multiplicar">*</option>
            <option value="dividir">/</option>

          </select>

            <input type="number" name="op2" placeholder="">

        <input type="submit" value="Calcular">
        
    </form>
</body>
</html>
    
 ';
}
