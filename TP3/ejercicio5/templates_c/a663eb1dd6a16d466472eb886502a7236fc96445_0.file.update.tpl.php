<?php
/* Smarty version 3.1.39, created on 2021-11-09 00:15:51
  from 'C:\xampp\htdocs\Practice\TP3\ejercicio5\templates\update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6189afa7b4a0e7_62517788',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a663eb1dd6a16d466472eb886502a7236fc96445' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Practice\\TP3\\ejercicio5\\templates\\update.tpl',
      1 => 1636413046,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6189afa7b4a0e7_62517788 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="<?php echo BASE_URL;?>
editarMaterias" method="POST">

    <input type="text" placeholder="materia" name="materia">
    <input type="text" placeholder="profesor" name="profesor">
    <input type="number" placeholder="carrera" name="carrera">
    <input hidden type="text" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" name='id'>
    <input type="submit" value="Enviar">

</form><?php }
}
