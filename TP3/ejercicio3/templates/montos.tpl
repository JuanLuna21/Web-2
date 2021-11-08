<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

{foreach from=$MontosDeudores item=$montos}

    <ul>
        <li>{$montos->deudor}</li>
        <li>{$montos->cuota}</li>
        <li>{$montos->cuota_capital}</li>
        <li>{$montos->fecha_pago}</li>
    </ul>
{/foreach}



</body>
</html>