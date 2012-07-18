<?php /* Smarty version Smarty 3.1.4, created on 2012-07-15 14:34:50
         compiled from ".\templates\borra_proyecto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:152005002b8eae87516-78266323%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '715428006fd552a933375e85a3abd02d5e9a0234' => 
    array (
      0 => '.\\templates\\borra_proyecto.tpl',
      1 => 1342275733,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '152005002b8eae87516-78266323',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_5002b8eb06e4b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5002b8eb06e4b')) {function content_5002b8eb06e4b($_smarty_tpl) {?>
<div align="center" id="crearusu"><br>
<table  border="0">
  <tr>
    <td bgcolor="#0066FF"><h2 align="center" >Borrar Proyecto </h2></td>
  </tr>
  <tr>
    <td height="301">
	<form  name="borrarusu" method="GET">
      	Codigo del proyecto a borrar :<input type="text" name="codigo" id="codigo" /><br>
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