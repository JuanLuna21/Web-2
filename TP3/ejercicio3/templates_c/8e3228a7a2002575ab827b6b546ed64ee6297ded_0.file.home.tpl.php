<?php
/* Smarty version 3.1.39, created on 2021-10-30 22:00:09
  from 'C:\xampp\htdocs\Practice\TP3\ejercicio3\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_617da449b21766_64258798',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e3228a7a2002575ab827b6b546ed64ee6297ded' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Practice\\TP3\\ejercicio3\\templates\\home.tpl',
      1 => 1635623698,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_617da449b21766_64258798 (Smarty_Internal_Template $_smarty_tpl) {
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pagos']->value, 'pago');
$_smarty_tpl->tpl_vars['pago']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pago']->value) {
$_smarty_tpl->tpl_vars['pago']->do_else = false;
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['pago']->value->deudor;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['pago']->value->cuota;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['pago']->value->cuota_capital;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['pago']->value->fecha_pago;?>
</td>
    </tr>
</tbody>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</body>
</html><?php }
}
