<?php /* Smarty version Smarty 3.1.4, created on 2012-07-08 20:19:17
         compiled from "./templates/actualiza_usuario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20336762684ffa310ddf5582-42815964%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a59640dbf102c1a4edb6d5f6bf485dee54dcc295' => 
    array (
      0 => './templates/actualiza_usuario.tpl',
      1 => 1341796751,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20336762684ffa310ddf5582-42815964',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ffa310deb03f',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ffa310deb03f')) {function content_4ffa310deb03f($_smarty_tpl) {?><div  align="center" id="crearusu"><br>
<table border="0">
  <tr>
    <td bgcolor="#0066FF" align="center" valign="middle" ><h2>Actualizar Usuario </h2></td>
  </tr>
  <tr>
    <td height="301">
	<form  name="crearusu" method="GET">
        <br>USUARIO: <input type="text" name="id" id="id"/><br>
        <br>ESTADO USUARIO: <select name="estado">
          <option value="0">Inactivo</option>
          <option value="1">Activo</option>
        </select>
        <input type="hidden" name="accion" value="actualiza">
        <input type="hidden" name="page" value="usuario">
        <div align="center"><br>
          <input name="Actualizar" type="submit" value="Actualizar">
        </div>
        </label>
      </form>      </td>
  </tr>
</table>
</div>
<?php }} ?>