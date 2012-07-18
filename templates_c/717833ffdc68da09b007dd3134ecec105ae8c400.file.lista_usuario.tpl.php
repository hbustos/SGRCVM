<?php /* Smarty version Smarty 3.1.4, created on 2012-07-10 22:36:11
         compiled from "./templates/lista_usuario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7504890454ff9ffb5661a58-12287118%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '717833ffdc68da09b007dd3134ecec105ae8c400' => 
    array (
      0 => './templates/lista_usuario.tpl',
      1 => 1341800820,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7504890454ff9ffb5661a58-12287118',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ff9ffb57d418',
  'variables' => 
  array (
    'array' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ff9ffb57d418')) {function content_4ff9ffb57d418($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/var/www/SGCRVM/smarty/libs/plugins/function.cycle.php';
?><div align="center">
<table>
	<tr style="background: gray">
	<td><b>Id </td>  <td><b> Usuario </td> <td><b> Nombres Apellidos </td><td><b> Estado</b></td>   <td><b> Identificacion </td> <td> <b> Tipo Usuario <td><b> Jefe  </td></tr>
	<br>
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['array']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
<tr style="background: <?php echo smarty_function_cycle(array('values'=>'silver, gray'),$_smarty_tpl);?>
">
	<td><?php echo $_smarty_tpl->tpl_vars['item']->value[0];?>
 </td><td> <?php echo $_smarty_tpl->tpl_vars['item']->value[1];?>
 </td><td> <?php echo $_smarty_tpl->tpl_vars['item']->value[2];?>
 </td><td> <?php echo $_smarty_tpl->tpl_vars['item']->value[3];?>
 </td>  <td> <?php echo $_smarty_tpl->tpl_vars['item']->value[4];?>
 </td>   <td> <?php echo $_smarty_tpl->tpl_vars['item']->value[5];?>
 </td> <td><?php echo $_smarty_tpl->tpl_vars['item']->value[6];?>
 </td></tr>
</tr>
<?php } ?>
</table>
</div>

<?php }} ?>