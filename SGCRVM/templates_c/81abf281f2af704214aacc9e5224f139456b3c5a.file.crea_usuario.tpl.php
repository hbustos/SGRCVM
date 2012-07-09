<?php /* Smarty version Smarty 3.1.4, created on 2012-07-08 17:10:22
         compiled from "./templates/crea_usuario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4876638154ff9ff4bce63a7-75405509%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81abf281f2af704214aacc9e5224f139456b3c5a' => 
    array (
      0 => './templates/crea_usuario.tpl',
      1 => 1341785315,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4876638154ff9ff4bce63a7-75405509',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ff9ff4bd7492',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ff9ff4bd7492')) {function content_4ff9ff4bd7492($_smarty_tpl) {?><div  align="center" id="crearusu"><br>
<table border="0">
  <tr>
    <td bgcolor="#0066FF" align="center" valign="middle" ><h2>Creaci&oacute;n de Usuarios </h2></td>
  </tr>
  <tr>
    <td height="301">
	<form  name="crearusu" method="GET">
      	<br>NOMBRES APELLIDOS : <input type="text" name="nombre" id="nombre" /><br>
      	<br>USUARIO : <input type="text" name="usuario" id="usuario" /><br>
        <br>IDENTIFICACION : <input type="text" name="identificacion" id="identificacion"><br>
        <br>CONTRASEÑA : <input type="text" name="clave" id="clave"/><br>
        <br>ID JEFE : <input type="text" name="id_jefe" id="id_jefe"/><br>
        <br>ESTADO USUARIO: <select name="estado">
          <option value="1">Activo</option>
          <option value="0">Inactivo</option>
        </select>	
        <br>TIPO USUARIO: <select name="tipo">
          <option value="2">TI</option>
          <option value="3">Gerente</option>
          <option value="4">Coordinador</option>
          <option value="5">Visitador</option>
        </select>	
	<input type="hidden" name="accion" value="crea">
        <input type="hidden" name="page" value="usuario">

        <div align="center"><br>
          <input name="Crear" type="submit" value="Crear">
        </div>
        </label>
      </form>      </td>
  </tr>
</table>
</div>
<?php }} ?>