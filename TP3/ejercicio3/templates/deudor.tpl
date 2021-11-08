<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

{foreach from=$listadeudor item=$deuda}

    <ul>
        <li>{$deuda->deudor}</li>
        <li>{$deuda->cuota}</li>
        <li>{$deuda->cuota_capital}</li>
        <li>{$deuda->fecha_pago}</li>
        <td><a href="delete/{$deuda->id_deudor}">eliminar</a></td>
    </ul>
{/foreach}


</body>
</html>