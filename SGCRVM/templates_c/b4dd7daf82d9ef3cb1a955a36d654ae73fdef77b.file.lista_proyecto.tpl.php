<?php /* Smarty version Smarty 3.1.4, created on 2012-07-20 01:17:41
         compiled from ".\templates\lista_proyecto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1349500895956eba33-23123265%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4dd7daf82d9ef3cb1a955a36d654ae73fdef77b' => 
    array (
      0 => '.\\templates\\lista_proyecto.tpl',
      1 => 1342502880,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1349500895956eba33-23123265',
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
  'unifunc' => 'content_500895958af9e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_500895958af9e')) {function content_500895958af9e($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include 'C:\xampp\htdocs\SGCRVM\SGCRVM\smarty\libs\plugins\function.cycle.php';
?><div align="center">
<table>
	<tr style="background: gray">
	<td><b> Codigo Ruta</b></td>
	<td><b> Usuario </b></td>
	<td><b> Cliente </b></td>
	<td><b> Fecha y Hora</b></td>	
	<td><b> Codigo de VIsita </b></td>
	<td><b> Estado</b></td>
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
	<td> <?php echo $_smarty_tpl->tpl_vars['item']->value[4];?>
 </td>
	<td> <?php echo $_smarty_tpl->tpl_vars['item']->value[5];?>
 </td> 
</tr>
</tr>
<?php } ?>
</table>
</div>

<?php }} ?>