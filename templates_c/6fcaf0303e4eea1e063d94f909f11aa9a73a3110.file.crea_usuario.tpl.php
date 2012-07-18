<?php /* Smarty version Smarty 3.1.4, created on 2012-07-18 00:23:43
         compiled from ".\templates\crea_usuario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:213285005e5ef847ec7-83477222%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6fcaf0303e4eea1e063d94f909f11aa9a73a3110' => 
    array (
      0 => '.\\templates\\crea_usuario.tpl',
      1 => 1342275733,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213285005e5ef847ec7-83477222',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_5005e5ef9a866',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5005e5ef9a866')) {function content_5005e5ef9a866($_smarty_tpl) {?><div  align="center" id="crearusu"><br>
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