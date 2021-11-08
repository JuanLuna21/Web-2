<?php
/* Smarty version 3.1.39, created on 2021-11-01 01:01:33
  from 'C:\xampp\htdocs\Practice\TP3\ejercicio3\templates\actualizar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_617f2e5d898a99_21529258',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8983007dc4f315b5e0153a82879b5f5f4ad8e100' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Practice\\TP3\\ejercicio3\\templates\\actualizar.tpl',
      1 => 1635724891,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_617f2e5d898a99_21529258 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <h3>Actualizar Cuota Capitan de un pago determinado </h3>
  <form action="<?php echo BASE_URL;?>
edite" method="POST">

        <input type="number" placeholder="cuota" name='edite'>
        <input type="submit" value="Enviar">
        <input hidden type="text" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" name='id'>
        
</form>



</body>
</html><?php }
}
