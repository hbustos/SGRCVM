<?php /* Smarty version Smarty 3.1.4, created on 2012-07-15 14:35:26
         compiled from ".\templates\actualiza_actividad.tpl" */ ?>
<?php /*%%SmartyHeaderCode:155735002b90ead0885-71563745%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9482a6c1364513d82eac80e3112461bca4024d20' => 
    array (
      0 => '.\\templates\\actualiza_actividad.tpl',
      1 => 1342275733,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '155735002b90ead0885-71563745',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_5002b90ebdeaa',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5002b90ebdeaa')) {function content_5002b90ebdeaa($_smarty_tpl) {?><div  align="center" id="crearusu"><br>
<table border="0">
  <tr>
    <td bgcolor="#0066FF" align="center" valign="middle" ><h2>Actualizar Actividad </h2></td>
  </tr>
  <tr>
    <td height="301">
	<form  name="crearusu" method="GET">
        <br>NOMBRE ACTIVIDAD : <input type="text" name="nombre" id="nombre"/><br>
        <br>PORCENTAJE ACTIVIDAD : <input type="text" name="porcen" id="procen"/><br>
        <br>ESTADO ACTIVIDAD : <select name="estado">
          <option value="2">Inactivo</option>
          <option value="0">Activo</option>
        </select>
        <input type="hidden" name="accion" value="actualiza">
        <input type="hidden" name="page" value="actividad">
        <div align="center"><br>
          <input name="Actualizar" type="submit" value="Actualizar">
        </div>
        </label>
      </form>      </td>
  </tr>
</table>
</div>
<?php }} ?>