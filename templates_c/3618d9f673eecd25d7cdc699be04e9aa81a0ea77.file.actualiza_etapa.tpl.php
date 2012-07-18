<?php /* Smarty version Smarty 3.1.4, created on 2012-07-11 20:56:40
         compiled from "./templates/actualiza_etapa.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20514024684ffe2ed814c328-45573472%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3618d9f673eecd25d7cdc699be04e9aa81a0ea77' => 
    array (
      0 => './templates/actualiza_etapa.tpl',
      1 => 1341372399,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20514024684ffe2ed814c328-45573472',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ffe2ed822dc8',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ffe2ed822dc8')) {function content_4ffe2ed822dc8($_smarty_tpl) {?><div  align="center" id="crearusu"><br>
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