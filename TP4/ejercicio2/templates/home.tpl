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
        {foreach from=$juegos item=$juego}
            <li>
                {$juego->nombre}
                {$juego->cantidad_jugadores}
                {$juego->juego_de_cartas}
            </li>
        {{/foreach}}
    </ol>



        <form action="{BASE_URL}InsertarJuego" method="POST">

            <input type="text" placeholder="juego" name="nombre">
            <input type="number" placeholder="cantidad de jugadores" name="cantidadJugadores">
            <label><input type="checkbox" id="cbox1" value="first_checkbox" name="si">Juego de cartas</label> 
            <input type="submit" value="Enviar">

        </form>



    </body>

    </html>