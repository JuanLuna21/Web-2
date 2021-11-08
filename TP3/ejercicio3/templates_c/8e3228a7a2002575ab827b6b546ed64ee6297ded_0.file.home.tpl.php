<?php
/* Smarty version 3.1.39, created on 2021-11-01 01:03:32
  from 'C:\xampp\htdocs\Practice\TP3\ejercicio3\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_617f2ed435f5b2_98675051',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e3228a7a2002575ab827b6b546ed64ee6297ded' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Practice\\TP3\\ejercicio3\\templates\\home.tpl',
      1 => 1635725004,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_617f2ed435f5b2_98675051 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lista']->value, 'pago');
$_smarty_tpl->tpl_vars['pago']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pago']->value) {
$_smarty_tpl->tpl_vars['pago']->do_else = false;
?>

    <ul>
        <li><?php echo $_smarty_tpl->tpl_vars['pago']->value->deudor;?>
</li>
        <li><?php echo $_smarty_tpl->tpl_vars['pago']->value->cuota;?>
</li>
        <li><?php echo $_smarty_tpl->tpl_vars['pago']->value->cuota_capital;?>
</li>
        <li><?php echo $_smarty_tpl->tpl_vars['pago']->value->fecha_pago;?>
</li>
        <td><a href="delete/<?php echo $_smarty_tpl->tpl_vars['pago']->value->id_deudor;?>
">eliminar</a></td>
        <td><a href="ver/<?php echo $_smarty_tpl->tpl_vars['pago']->value->id_deudor;?>
">VerDeudor</a></td>
        <td><a href="<?php echo BASE_URL;?>
editform/<?php echo $_smarty_tpl->tpl_vars['pago']->value->id_deudor;?>
">Editar</a></td>
    </ul>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

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
</html><?php }
}
