<?php /* Smarty version Smarty 3.1.4, created on 2012-07-15 14:35:13
         compiled from ".\templates\crea_etapa.tpl" */ ?>
<?php /*%%SmartyHeaderCode:143615002b901225967-37608494%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d425525c64fdc8d37738d79d53d8aecb137dd88' => 
    array (
      0 => '.\\templates\\crea_etapa.tpl',
      1 => 1342275733,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '143615002b901225967-37608494',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_5002b9013679c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5002b9013679c')) {function content_5002b9013679c($_smarty_tpl) {?><div  align="center" id="crearusu"><br>
<table border="0">
  <tr>
    <td bgcolor="#0066FF" align="center" valign="middle" ><h2>Creaci&oacute;n de Etapa </h2></td>
  </tr>
  <tr>
    <td height="301">
	<form  name="crearusu" method="GET">
      	<br>NOMBRE ETAPA : <input type="text" name="nombre" id="nombre" />
        <br>CODIGO ETAPA : <input type="text" name="codigo" id="codigo"/>
        <br>CODIGO PROYECTO : <input type="text" name="codigopro" id="codigopro"/>
        <br>DESCRIPCION : <textarea rows="4" cols="80" type="text" name="descripcion" id="descripcion"></textarea>
        <br>PESO : <input type="text" name="peso" id="peso"/>
        <br>RESPONSABLE : <input type="text" name="responsable" id="responsable"/>
	
	<input type="hidden" name="accion" value="crea">
        <input type="hidden" name="page" value="etapa">

        <div align="center"><br>
          <input name="Crear" type="submit" value="Crear">
        </div>
        </label>
      </form>      </td>
  </tr>
</table>
</div>
<?php }} ?>