<?php /* Smarty version Smarty 3.1.4, created on 2012-07-15 14:35:30
         compiled from ".\templates\borra_actividad.tpl" */ ?>
<?php /*%%SmartyHeaderCode:319785002b91237fc44-25854020%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '361d614eb51d62bdc98f92dd827ad3f730ec527a' => 
    array (
      0 => '.\\templates\\borra_actividad.tpl',
      1 => 1342275733,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '319785002b91237fc44-25854020',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_5002b912472eb',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5002b912472eb')) {function content_5002b912472eb($_smarty_tpl) {?>
<div align="center" id="crearusu"><br>
<table  border="0">
  <tr>
    <td bgcolor="#0066FF"><h2 align="center" >Borrar Actividad  </h2></td>
  </tr>
  <tr>
    <td height="301">
	<form  name="borraractiv" method="GET">
      	Nombre de la actividad a borrar :<input type="text" name="nombre" id="nombre" /><br>
        <div align="center"><br>
        <input type="hidden" name="accion" value="borra">
        <input type="hidden" name="page" value="actividad">
          <input name="borrar" type="submit" value="Borrar">
        </div>
        </label>
      </form>      </td>
  </tr>
</table>
</div>
<?php }} ?>