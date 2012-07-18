<?php /* Smarty version Smarty 3.1.4, created on 2012-07-16 01:21:04
         compiled from ".\templates\lista_rventas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:185515002c6191b2740-12740045%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d75c5a35a8087bd281137f6e2bd6f1a57ba07e1' => 
    array (
      0 => '.\\templates\\lista_rventas.tpl',
      1 => 1342394461,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '185515002c6191b2740-12740045',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_5002c61930ec7',
  'variables' => 
  array (
    'array' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5002c61930ec7')) {function content_5002c61930ec7($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include 'C:\xampp\htdocs\sgcrvm\smarty\libs\plugins\function.cycle.php';
?><div align="center">
<table>
	<tr style="background: gray">
	<td><b> NombresApellidos </td>
	<td><b> Descripcion </td>
	<td><b> Unidades </td>
	<td><b> Subtotal </td>
	</tr>
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
	<td> <?php echo $_smarty_tpl->tpl_vars['item']->value[0];?>
 </td>
	<td> <?php echo $_smarty_tpl->tpl_vars['item']->value[1];?>
 </td>
	<td> <?php echo $_smarty_tpl->tpl_vars['item']->value[2];?>
 </td>
	<td> <?php echo $_smarty_tpl->tpl_vars['item']->value[3];?>
 </td>
	</tr>
</tr>
<?php } ?>
</table>
</div><?php }} ?>