<?php /* Smarty version Smarty 3.1.4, created on 2012-07-20 00:19:24
         compiled from ".\templates\lista_etapa.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28348500887ecaa8390-04507644%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30137808c2ce5585fc976da1ec2e5600a7414e08' => 
    array (
      0 => '.\\templates\\lista_etapa.tpl',
      1 => 1342657308,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28348500887ecaa8390-04507644',
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
  'unifunc' => 'content_500887ecc743b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_500887ecc743b')) {function content_500887ecc743b($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include 'C:\xampp\htdocs\SGCRVM\SGCRVM\smarty\libs\plugins\function.cycle.php';
?><div align="center">
<table>
	<tr style="background: gray">
	<td><b> Codigo Etapa </td>
	<td><b> Codigo Proyecto </td>
	<td><b> Nombre  Etapa </td>
	<td><b> Descripcion </td>
	<td><b> Procentaje </td>
	<td><b> Peso </b></td>
	<td><b> Responsable </b></td>
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
	<td> <?php echo $_smarty_tpl->tpl_vars['item']->value[6];?>
 </td>
	</tr>
</tr>
<?php } ?>
</table>
</div>

<?php }} ?>