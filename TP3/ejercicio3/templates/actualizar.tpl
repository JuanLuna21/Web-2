<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <h3>Actualizar Cuota Capital de un pago determinado </h3>
  <form action="{BASE_URL}edite" method="POST">

        <input type="number" placeholder="cuota" name='edite'>
        <input type="submit" value="Enviar">
        <input hidden type="text" value="{$id}" name='id'>
        
</form>



</body>
</html>