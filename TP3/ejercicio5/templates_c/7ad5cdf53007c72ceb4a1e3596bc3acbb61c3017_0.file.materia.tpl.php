<?php
/* Smarty version 3.1.39, created on 2021-11-09 21:42:21
  from 'C:\xampp\htdocs\Practice\TP3\ejercicio5\templates\materia.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_618add2dae31f1_55366334',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ad5cdf53007c72ceb4a1e3596bc3acbb61c3017' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Practice\\TP3\\ejercicio5\\templates\\materia.tpl',
      1 => 1636490538,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_618add2dae31f1_55366334 (Smarty_Internal_Template $_smarty_tpl) {
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['materias']->value, 'materia');
$_smarty_tpl->tpl_vars['materia']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['materia']->value) {
$_smarty_tpl->tpl_vars['materia']->do_else = false;
?>
		<li>
			<?php echo $_smarty_tpl->tpl_vars['materia']->value->id_materia;?>

			<?php echo $_smarty_tpl->tpl_vars['materia']->value->nombre;?>

            <?php echo $_smarty_tpl->tpl_vars['materia']->value->profesor;?>

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
