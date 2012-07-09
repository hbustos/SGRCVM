<?php /* Smarty version Smarty 3.1.4, created on 2012-07-08 20:38:57
         compiled from "./templates/borra_usuario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18241375664ffa3631d3c637-01373839%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54d006ffa9081ffb544ec7acc8e4a16d2dee9957' => 
    array (
      0 => './templates/borra_usuario.tpl',
      1 => 1341372399,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18241375664ffa3631d3c637-01373839',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ffa3631dde68',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ffa3631dde68')) {function content_4ffa3631dde68($_smarty_tpl) {?>
<div align="center" id="crearusu"><br>
<table  border="0">
  <tr>
    <td bgcolor="#0066FF"><h2 align="center" >Borrar Usuarios </h2></td>
  </tr>
  <tr>
    <td height="301">
	<form  name="borrarusu" method="GET">
      	ID de usuario a borrar :<input type="text" name="id" id="id" /><br>
        <div align="center"><br>
        <input type="hidden" name="accion" value="borra">
        <input type="hidden" name="page" value="usuario">
          <input name="borrar" type="submit" value="Borrar">
        </div>
        </label>
      </form>      </td>
  </tr>
</table>
</div>
<?php }} ?>