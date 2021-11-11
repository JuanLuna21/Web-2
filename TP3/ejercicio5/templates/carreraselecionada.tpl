<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <ol>

    {foreach from=$carreras item=$carrera}
		<li>
			{$carrera->id_carrera}
			{$carrera->carrera}
            {$carrera->duracion_carrera}
        </li>
    {{/foreach}}
    </ol>
</body>
</html>
