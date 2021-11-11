<?php
/* Smarty version 3.1.39, created on 2021-11-09 22:30:19
  from 'C:\xampp\htdocs\Practice\TP3\ejercicio5\templates\carreraselecionada.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_618ae86ba52349_10662319',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a1ac0af998bded642df7871a2e724ddec1734e1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Practice\\TP3\\ejercicio5\\templates\\carreraselecionada.tpl',
      1 => 1636493324,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_618ae86ba52349_10662319 (Smarty_Internal_Template $_smarty_tpl) {
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['carreras']->value, 'carrera');
$_smarty_tpl->tpl_vars['carrera']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['carrera']->value) {
$_smarty_tpl->tpl_vars['carrera']->do_else = false;
?>
		<li>
			<?php echo $_smarty_tpl->tpl_vars['carrera']->value->id_carrera;?>

			<?php echo $_smarty_tpl->tpl_vars['carrera']->value->carrera;?>

            <?php echo $_smarty_tpl->tpl_vars['carrera']->value->duracion_carrera;?>

        </li>
    <?php ob_start();
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

    </ol>
</body>
</html>
<?php }
}
