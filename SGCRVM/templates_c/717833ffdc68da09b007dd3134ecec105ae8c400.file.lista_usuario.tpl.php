<?php /* Smarty version Smarty 3.1.4, created on 2012-07-18 19:55:23
         compiled from "./templates/lista_usuario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22043709850075afbee3d63-93468380%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '22043709850075afbee3d63-93468380',
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
  'unifunc' => 'content_50075afc0152d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50075afc0152d')) {function content_50075afc0152d($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/var/www/SGCRVM/smarty/libs/plugins/function.cycle.php';
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