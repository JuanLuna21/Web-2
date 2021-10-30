<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    {foreach from=$pagos item=$pago}
    <tr>
        <td>{$pago->deudor}</td>
        <td>{$pago->cuota}</td>
        <td>{$pago->cuota_capital}</td>
        <td>{$pago->fecha_pago}</td>
    </tr>
</tbody>

{/foreach}
</body>
</html>