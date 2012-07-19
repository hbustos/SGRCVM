<?php /* Smarty version Smarty 3.1.4, created on 2012-07-18 19:55:31
         compiled from "./templates/lista_inventario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:82994332350075b030aa5b0-96401655%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba7df808eef481a39465fb13c760eae66c067df8' => 
    array (
      0 => './templates/lista_inventario.tpl',
      1 => 1342403255,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '82994332350075b030aa5b0-96401655',
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
  'unifunc' => 'content_50075b03152ef',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50075b03152ef')) {function content_50075b03152ef($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/var/www/SGCRVM/smarty/libs/plugins/function.cycle.php';
?><div align="center">
<table>
	<tr style="background: gray">
	<td><b>Id </td>  <td><b> Id_Producto </td> <td><b> Cantidad </td><td><b> Descripcion </b></tr>
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
 </td><td> <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['item']->value[3],SMARTY_RESOURCE_CHAR_SET);?>
 </td> </tr>
</tr>
<?php } ?>
</table>
</div>

<?php }} ?>