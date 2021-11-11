<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>id_materia</th>
                <th>nombre</th>
                <th>profesor</th>
            </tr>
        </thead>
        <tbody>
            {foreach from=$habitacionclub item=$habitacion}
                <tr>
                    <td>{$habitacion->id}</td>
                    <td>{$habitacion->nro_habitacion}</td>
                    <td>{$habitacion->cant_camas}</td>
                    <td>{$habitacion->descripcion}</td>
                    {if $habitacion->ocupada == true}
                        <td class="verde">{$habitacion->ocupada}</td>
                    {else}
                        <td>{$habitacion->ocupada}</td>
                        {/else}
                    {/if}
                </tr>
            </tbody>
        {{/foreach}}
    </table>

    <form action="{BASE_URL}InsertarHabitacion" method="POST">

    <input type="text" placeholder="materia" name="nro_habitacion">
    <input type="text" placeholder="profesor" name="cant_camas">
    <input type="number" placeholder="carrera" name="descripcion">
    <input type="number" placeholder="carrera" name="ocupada">
    <input type="submit" value="Enviar">

</form>


<form action="Registro" method="POST">

<input type="text" placeholder="Ingrese Mail" name="correo">
<input type="password" placeholder="Contraseña" name="password">
<input type="submit" value="crear cuenta">


</form>

<p>capacidad = {$capacidad} </p>

</body>

</html>