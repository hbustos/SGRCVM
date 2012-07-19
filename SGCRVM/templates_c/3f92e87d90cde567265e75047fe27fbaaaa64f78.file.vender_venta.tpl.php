<?php /* Smarty version Smarty 3.1.4, created on 2012-07-20 00:19:38
         compiled from ".\templates\vender_venta.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20335500887fa77e6a0-91763532%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f92e87d90cde567265e75047fe27fbaaaa64f78' => 
    array (
      0 => '.\\templates\\vender_venta.tpl',
      1 => 1342657308,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20335500887fa77e6a0-91763532',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'user' => 0,
    'array' => 0,
    'item' => 0,
    'array2' => 0,
    'item2' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_500887faa7cef',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_500887faa7cef')) {function content_500887faa7cef($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_select_date')) include 'C:\xampp\htdocs\SGCRVM\SGCRVM\smarty\libs\plugins\function.html_select_date.php';
?><meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1"/>
<div  align="center" id="crearusu"><br>
<table border="0">
  <tr>
    <td bgcolor="#0066FF" align="center" valign="middle" ><h2>Venta de Productos </h2></td>
  </tr>
  <tr>
    <td height="301">
	<form  name="venta" method="GET">
	<br>ID USUARIO: <?php echo $_smarty_tpl->tpl_vars['id']->value;?>

	<br>USUARIO: <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['user']->value,SMARTY_RESOURCE_CHAR_SET);?>

        <br>CLIENTE: <select name="id_cliente">
	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['array']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value[0];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value[1];?>
</option>
	<?php } ?>
        </select>	
        <br>PRODUCTO: <select name="id_producto">
	<?php  $_smarty_tpl->tpl_vars['item2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item2']->_loop = false;
 $_smarty_tpl->tpl_vars['key2'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['array2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item2']->key => $_smarty_tpl->tpl_vars['item2']->value){
$_smarty_tpl->tpl_vars['item2']->_loop = true;
 $_smarty_tpl->tpl_vars['key2']->value = $_smarty_tpl->tpl_vars['item2']->key;
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['item2']->value[1];?>
"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['item2']->value[3],SMARTY_RESOURCE_CHAR_SET);?>
</option>
	<?php } ?>
        </select>	
	<br>CANTIDAD: <input type="text" name="cantidad" id="cantidad" />
	<br>FECHA ENTREGA  : <?php echo smarty_function_html_select_date(array('end_year'=>"2020",'prefix'=>'fecha','name'=>"fecha"),$_smarty_tpl);?>

	<input type="hidden" name="accion" value="vender">
        <input type="hidden" name="page" value="venta">
        <div align="center"><br>
          <input name="Vender" type="submit" value="Vender">
        </div>
        </label>
      </form>      </td>
  </tr>
</table>
</div>
<?php }} ?>