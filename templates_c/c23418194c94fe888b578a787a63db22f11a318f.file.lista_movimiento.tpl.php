<?php /* Smarty version Smarty 3.1.4, created on 2012-07-10 22:36:08
         compiled from "./templates/lista_movimiento.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21100875614ffcf4a896b7f3-57672865%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c23418194c94fe888b578a787a63db22f11a318f' => 
    array (
      0 => './templates/lista_movimiento.tpl',
      1 => 1341372398,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21100875614ffcf4a896b7f3-57672865',
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
  'unifunc' => 'content_4ffcf4a8a2545',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ffcf4a8a2545')) {function content_4ffcf4a8a2545($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/var/www/SGCRVM/smarty/libs/plugins/function.cycle.php';
?><div align="center">
<table>
	<tr style="background: gray">
	<td><b> Fecha </td>
	<td><b> Usuario </td>
	<td><b> Movimiento </td>
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
	</tr>
</tr>
<?php } ?>
</table>
</div>

<?php }} ?>