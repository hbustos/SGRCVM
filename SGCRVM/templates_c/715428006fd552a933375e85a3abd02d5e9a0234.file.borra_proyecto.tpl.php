<?php /* Smarty version Smarty 3.1.4, created on 2012-07-20 01:17:39
         compiled from ".\templates\borra_proyecto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:454050089593310b73-60292140%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '715428006fd552a933375e85a3abd02d5e9a0234' => 
    array (
      0 => '.\\templates\\borra_proyecto.tpl',
      1 => 1342656302,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '454050089593310b73-60292140',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_5008959340371',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5008959340371')) {function content_5008959340371($_smarty_tpl) {?>
<div align="center" id="crearusu"><br>
<table  border="0">
  <tr>
    <td bgcolor="#0066FF"><h2 align="center" >Eliminar Ruta </h2></td>
  </tr>
  <tr>
    <td height="301">
	<form  name="borrarusu" method="GET">
      	Codigo del ruta a borrar :<input type="text" name="codigo" id="codigo" /><br>
        <div align="center"><br>
        <input type="hidden" name="accion" value="borra">
        <input type="hidden" name="page" value="proyecto">
          <input name="borrar" type="submit" value="Borrar">
        </div>
        </label>
      </form>      </td>
  </tr>
</table>
</div>
<?php }} ?>