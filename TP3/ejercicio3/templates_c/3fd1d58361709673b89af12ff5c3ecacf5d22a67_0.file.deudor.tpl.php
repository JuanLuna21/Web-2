<?php
/* Smarty version 3.1.39, created on 2021-10-31 02:06:22
  from 'C:\xampp\htdocs\Practice\TP3\ejercicio3\templates\deudor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_617dec0e1faf68_49541742',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3fd1d58361709673b89af12ff5c3ecacf5d22a67' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Practice\\TP3\\ejercicio3\\templates\\deudor.tpl',
      1 => 1635636672,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_617dec0e1faf68_49541742 (Smarty_Internal_Template $_smarty_tpl) {
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listadeudor']->value, 'deuda');
$_smarty_tpl->tpl_vars['deuda']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['deuda']->value) {
$_smarty_tpl->tpl_vars['deuda']->do_else = false;
?>

    <ul>
        <li><?php echo $_smarty_tpl->tpl_vars['deuda']->value->deudor;?>
</li>
        <li><?php echo $_smarty_tpl->tpl_vars['deuda']->value->cuota;?>
</li>
        <li><?php echo $_smarty_tpl->tpl_vars['deuda']->value->cuota_capital;?>
</li>
        <li><?php echo $_smarty_tpl->tpl_vars['deuda']->value->fecha_pago;?>
</li>
        <td><a href="delete/<?php echo $_smarty_tpl->tpl_vars['deuda']->value->id_deudor;?>
">eliminar</a></td>
    </ul>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


</body>
</html><?php }
}
