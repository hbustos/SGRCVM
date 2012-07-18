<?php /* Smarty version Smarty 3.1.4, created on 2012-07-15 14:35:16
         compiled from ".\templates\actualiza_etapa.tpl" */ ?>
<?php /*%%SmartyHeaderCode:125105002b904947625-64410787%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1502c54a127374edb43150630a7b01519747371c' => 
    array (
      0 => '.\\templates\\actualiza_etapa.tpl',
      1 => 1342275733,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '125105002b904947625-64410787',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_5002b904a68d8',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5002b904a68d8')) {function content_5002b904a68d8($_smarty_tpl) {?><div  align="center" id="crearusu"><br>
<table border="0">
  <tr>
    <td bgcolor="#0066FF" align="center" valign="middle" ><h2>Actualizar de Etapa </h2></td>
  </tr>
  <tr>
    <td height="301">
	<form  name="crearusu" method="GET">
        <br>CODIGO ETAPA : <input type="text" name="codigo" id="codigo"/>
        <br>PESO : <input type="text" name="peso" id="peso"/>
	
	<input type="hidden" name="accion" value="actualiza">
        <input type="hidden" name="page" value="etapa">

        <div align="center"><br>
          <input name="Actualizar" type="submit" value="Actualizar">
        </div>
        </label>
      </form>      </td>
  </tr>
</table>
</div>
<?php }} ?>