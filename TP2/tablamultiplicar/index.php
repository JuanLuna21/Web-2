<?php
function showHome(){

echo'
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Multiplication table.</h1>

    <form action="tablamultiplicar" method="get">
    
    <input type="number" name="num" placeholder="Enter the number of the table you want">

    <button type="submit">Send.</button>

</form>

</body>
</html>

';
}