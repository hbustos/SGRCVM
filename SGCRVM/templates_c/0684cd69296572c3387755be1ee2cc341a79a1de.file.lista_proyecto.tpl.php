<?php /* Smarty version Smarty 3.1.4, created on 2012-07-17 23:07:13
         compiled from "./templates/lista_proyecto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:147494208250063671a4e672-68816256%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0684cd69296572c3387755be1ee2cc341a79a1de' => 
    array (
      0 => './templates/lista_proyecto.tpl',
      1 => 1341372399,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '147494208250063671a4e672-68816256',
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
  'unifunc' => 'content_50063671b292d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50063671b292d')) {function content_50063671b292d($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/var/www/SGCRVM/smarty/libs/plugins/function.cycle.php';
?><div align="center">
<table>
	<tr style="background: gray">
	<td><b> Codigo </b></td>
	<td><b> Nombre </b></td>
	<td><b> Fecha Inicio </b></td>
	<td><b> Fecha Fin </b></td>	
	<td><b> Estado </b></td>
	<td><b> Responsable </b></td>
	<td><b> Descripcion </b></td>
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
	<td> <?php echo $_smarty_tpl->tpl_vars['item']->value[6];?>
 </td> 
	<td> <?php echo $_smarty_tpl->tpl_vars['item']->value[7];?>
 </td>
</tr>
</tr>
<?php } ?>
</table>
</div>

<?php }} ?>