<?php
/* Smarty version 3.1.39, created on 2021-11-11 02:14:14
  from 'C:\xampp\htdocs\Practice\TP4\ejercicio2\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_618c6e66cabcf3_32808652',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2397c9004bbfad0dfd00b389edc100be9b93e3b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Practice\\TP4\\ejercicio2\\templates\\home.tpl',
      1 => 1636593164,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_618c6e66cabcf3_32808652 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ol>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['juegos']->value, 'juego');
$_smarty_tpl->tpl_vars['juego']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['juego']->value) {
$_smarty_tpl->tpl_vars['juego']->do_else = false;
?>
            <li>
                <?php echo $_smarty_tpl->tpl_vars['juego']->value->nombre;?>

                <?php echo $_smarty_tpl->tpl_vars['juego']->value->cantidad_jugadores;?>

                <?php echo $_smarty_tpl->tpl_vars['juego']->value->juego_de_cartas;?>

            </li>
        <?php ob_start();
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

    </ol>



        <form action="<?php echo BASE_URL;?>
InsertarJuego" method="POST">

            <input type="text" placeholder="juego" name="nombre">
            <input type="number" placeholder="cantidad de jugadores" name="cantidadJugadores">
            <label><input type="checkbox" id="cbox1" value="first_checkbox" name="si">Juego de cartas</label> 
            <input type="submit" value="Enviar">

        </form>



    </body>

    </html><?php }
}
