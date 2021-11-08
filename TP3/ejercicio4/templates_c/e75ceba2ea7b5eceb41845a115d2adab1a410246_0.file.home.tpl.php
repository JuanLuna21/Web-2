<?php
/* Smarty version 3.1.39, created on 2021-11-01 02:06:17
  from 'C:\xampp\htdocs\Practice\TP3\ejercicio4\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_617f3d89a8f060_77830663',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e75ceba2ea7b5eceb41845a115d2adab1a410246' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Practice\\TP3\\ejercicio4\\templates\\home.tpl',
      1 => 1635728095,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_617f3d89a8f060_77830663 (Smarty_Internal_Template $_smarty_tpl) {
?>
<link rel="stylesheet" href="css/style.css">
<h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
<table>
	
    <thead>
        <tr>
            <th>Deudor</th>
            <th>cuota</th>
            <th>cuota_capital</th>
            <th>fecha_pago</th>
        </tr>
    </thead>
    <tbody>
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
            <td><a href="eliminar/<?php echo $_smarty_tpl->tpl_vars['pago']->value->id_deudor;?>
">eliminar</a></td>
        </tr>
    </tbody>
 
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
<div id="resultado"></div>
</table>
<?php echo '<script'; ?>
 type="text/javascript" src="javascript/js"><?php }
}
