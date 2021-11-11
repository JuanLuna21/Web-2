<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

{foreach from=$lista item=$pago}

    <ul>
        <li>{$pago->deudor}</li>
        <li>{$pago->cuota}</li>
        <li>{$pago->cuota_capital}</li>
        <li>{$pago->fecha_pago}</li>
        <td><a href="delete/{$pago->id_deudor}">eliminar</a></td>
        <td><a href="ver/{$pago->id_deudor}">VerDeudor</a></td>
        <td><a href="{BASE_URL}editform/{$pago->id_deudor}">Editar</a></td>
        <td><a href="{BASE_URL}delete/{$pago->id_deudor}">Eliminar</a></td>
    </ul>
{/foreach}

  <form action="insert" method="POST">

        <input type="text" placeholder="Deudor" name="deudor">
        <input type="number" placeholder="cuota" name="cuota">
        <input type="number" placeholder="cuota_capital" name="capital">
        <input type="text" placeholder="fecha_pago" name="fecha">
        <input type="submit" value="Enviar">
        
</form>


  <form action="monto" method="POST">

        <input type="number" placeholder="cuota" name="monto">
        <input type="submit" value="Enviar">
        
</form>



</body>
</html>