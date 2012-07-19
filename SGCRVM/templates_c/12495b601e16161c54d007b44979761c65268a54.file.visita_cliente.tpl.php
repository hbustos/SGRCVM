<?php /* Smarty version Smarty 3.1.4, created on 2012-07-18 21:06:53
         compiled from "./templates/visita_cliente.tpl" */ ?>
<?php /*%%SmartyHeaderCode:84298710750076a546bf2e0-90341023%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12495b601e16161c54d007b44979761c65268a54' => 
    array (
      0 => './templates/visita_cliente.tpl',
      1 => 1342663611,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '84298710750076a546bf2e0-90341023',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_50076a547c99a',
  'variables' => 
  array (
    'id' => 0,
    'user' => 0,
    'array' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50076a547c99a')) {function content_50076a547c99a($_smarty_tpl) {?><meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1"/>
<div  align="center" id="crearusu"><br>
<table border="0">
  <tr>
    <td bgcolor="#0066FF" align="center" valign="middle" ><h2>Visita Cliente </h2></td>
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
	<br>GESTION: <textarea rows="4" cols="80" type="text" name="gestion" id="gestion"></textarea>
	<input type="hidden" name="accion" value="visita">
        <input type="hidden" name="page" value="cliente">
        <div align="center"><br>
          <input name="Vender" type="submit" value="Crear Visita">
        </div>
        </label>
      </form>      </td>
  </tr>
</table>
</div>
<?php }} ?>