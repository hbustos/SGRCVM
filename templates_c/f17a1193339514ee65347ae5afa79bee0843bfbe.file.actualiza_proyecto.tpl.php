<?php /* Smarty version Smarty 3.1.4, created on 2012-07-15 14:34:47
         compiled from ".\templates\actualiza_proyecto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:131555002b8e7447711-84882091%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f17a1193339514ee65347ae5afa79bee0843bfbe' => 
    array (
      0 => '.\\templates\\actualiza_proyecto.tpl',
      1 => 1342275733,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '131555002b8e7447711-84882091',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_5002b8e757eec',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5002b8e757eec')) {function content_5002b8e757eec($_smarty_tpl) {?><div  align="center" id="crearusu"><br>
<table border="0">
  <tr>
    <td bgcolor="#0066FF" align="center" valign="middle" ><h2>Actualizar Proyecto </h2></td>
  </tr>
  <tr>
    <td height="301">
	<form  name="crearusu" method="GET">
        <br>CODIGO PROYECTO : <input type="text" name="codigo" id="codigo"/><br>
        <br>ESTADO PROYECTO : <select name="estado">
          <option value="2">Inactivo</option>
          <option value="0">Activo</option>
        </select>
        <input type="hidden" name="accion" value="actualiza">
        <input type="hidden" name="page" value="proyecto">
        <div align="center"><br>
          <input name="Actualizar" type="submit" value="Actualizar">
        </div>
        </label>
      </form>      </td>
  </tr>
</table>
</div>
<?php }} ?>