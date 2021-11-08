<?php
/* Smarty version 3.1.39, created on 2021-10-31 02:05:53
  from 'C:\xampp\htdocs\Practice\TP3\ejercicio3\templates\Montos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_617debf1af6243_28280811',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a251347fb1aaf58a484fa80a5252dd232219e9b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Practice\\TP3\\ejercicio3\\templates\\Montos.tpl',
      1 => 1635642351,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_617debf1af6243_28280811 (Smarty_Internal_Template $_smarty_tpl) {
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MontosDeudores']->value, 'montos');
$_smarty_tpl->tpl_vars['montos']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['montos']->value) {
$_smarty_tpl->tpl_vars['montos']->do_else = false;
?>

    <ul>
        <li><?php echo $_smarty_tpl->tpl_vars['montos']->value->deudor;?>
</li>
        <li><?php echo $_smarty_tpl->tpl_vars['montos']->value->cuota;?>
</li>
        <li><?php echo $_smarty_tpl->tpl_vars['montos']->value->cuota_capital;?>
</li>
        <li><?php echo $_smarty_tpl->tpl_vars['montos']->value->fecha_pago;?>
</li>
    </ul>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>



</body>
</html><?php }
}
