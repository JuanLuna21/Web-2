<?php
/* Smarty version 3.1.39, created on 2021-11-08 23:59:51
  from 'C:\xampp\htdocs\Practice\TP3\ejercicio5\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6189abe7a31f82_27204476',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '769eba89197b3403b19f16bd533e3920db4b0bd8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Practice\\TP3\\ejercicio5\\templates\\home.tpl',
      1 => 1636412387,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6189abe7a31f82_27204476 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
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
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['datos']->value, 'materia');
$_smarty_tpl->tpl_vars['materia']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['materia']->value) {
$_smarty_tpl->tpl_vars['materia']->do_else = false;
?>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['materia']->value->id_materia;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['materia']->value->nombre;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['materia']->value->profesor;?>
</td>
            <td><a href="<?php echo BASE_URL;?>
edite/<?php echo $_smarty_tpl->tpl_vars['materia']->value->id_materia;?>
">Editar</a></td>
        </tr>
    </tbody>
    <?php ob_start();
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

</table>  

  <form action="insertMaterias" method="POST">

        <input type="text" placeholder="materia" name="materia">
        <input type="text" placeholder="profesor" name="profesor">
        <input type="number" placeholder="carrera" name="carrera">
          <select name="carrera">
            <option value=1>Ingeniería de Sistemas</option>
            <option value=2>Tecnicatura Universitaria en Desarrollo de Aplicaciones Informáticas</option>
            <option value=3>Tecnicatura Universitaria en Administración de Redes Informáticas</option>
            <option value=4>Profesorado de Informática</option>
        </select>
        <input type="submit" value="Enviar">
        
</form>
 
    
</body>
</html><?php }
}
