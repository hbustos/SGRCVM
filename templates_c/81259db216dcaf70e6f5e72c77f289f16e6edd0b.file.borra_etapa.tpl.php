<?php /* Smarty version Smarty 3.1.4, created on 2012-07-15 14:35:19
         compiled from ".\templates\borra_etapa.tpl" */ ?>
<?php /*%%SmartyHeaderCode:88955002b907bdd2f5-08958380%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81259db216dcaf70e6f5e72c77f289f16e6edd0b' => 
    array (
      0 => '.\\templates\\borra_etapa.tpl',
      1 => 1342275733,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '88955002b907bdd2f5-08958380',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_5002b907cf173',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5002b907cf173')) {function content_5002b907cf173($_smarty_tpl) {?><div align="center" id="borraretapa"><br>
<table  border="0">
  <tr>
    <td bgcolor="#0066FF"><h2 align="center" >Borrar Etapa  </h2></td>
  </tr>
  <tr>
    <td height="301">
	<form  name="borraractiv" method="GET">
      	Codigo de la etapa a borrar :<input type="text" name="codigo" id="codigo" /><br>
        <div align="center"><br>
        <input type="hidden" name="accion" value="borra">
        <input type="hidden" name="page" value="etapa">
          <input name="borrar" type="submit" value="Borrar">
        </div>
        </label>
      </form>      </td>
  </tr>
</table>
</div>
<?php }} ?>