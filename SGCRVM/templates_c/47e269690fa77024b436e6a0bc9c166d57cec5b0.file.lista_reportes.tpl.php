<?php /* Smarty version Smarty 3.1.4, created on 2012-07-19 02:48:32
         compiled from ".\templates\lista_reportes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3078850075960db4b79-75248457%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47e269690fa77024b436e6a0bc9c166d57cec5b0' => 
    array (
      0 => '.\\templates\\lista_reportes.tpl',
      1 => 1342383278,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3078850075960db4b79-75248457',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'array' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_500759611c1c0',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_500759611c1c0')) {function content_500759611c1c0($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include 'C:\xampp\htdocs\SGCRVM\SGCRVM\smarty\libs\plugins\function.cycle.php';
?><div align="center">
<table>
	<tr style="background: gray">
	<td><b> FechaHora </td>
	<td><b> NombresApellidos </td>

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
	</tr>
</tr>
<?php } ?>
</table>
</div><?php }} ?>