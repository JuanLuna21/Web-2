<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>asdasdsad</p>

{foreach from=$lista item=$pago}

    <ul>
        <li>{$pago->deudor}</li>
        <li>{$pago->cuota}</li>
        <li>{$pago->cuota_capital}</li>
        <li>{$pago->fecha_pago}</li>
    </ul>
{/foreach}

</body>
</html>