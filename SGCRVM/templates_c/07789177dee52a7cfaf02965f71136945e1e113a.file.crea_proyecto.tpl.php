<?php /* Smarty version Smarty 3.1.4, created on 2012-07-20 01:17:34
         compiled from ".\templates\crea_proyecto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:34705008958e142ca5-41184037%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07789177dee52a7cfaf02965f71136945e1e113a' => 
    array (
      0 => '.\\templates\\crea_proyecto.tpl',
      1 => 1342671378,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '34705008958e142ca5-41184037',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_5008958e35287',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5008958e35287')) {function content_5008958e35287($_smarty_tpl) {?><div  align="center" id="crearusu"><br>
<table border="0">
  <tr>
    <td bgcolor="#0066FF" align="center" valign="middle" ><h2>Creaci&oacute;n de Ruta </h2></td>
  </tr>
  <tr>
    <td height="301">
	<form  name="crearusu" method="GET">
      	<br>
      	CODIGO USUARIO: 
      	 <input type="text" name="nombre" id="nombre" /><br>
        <br>
        CODIGO CLIENTE: 
        <input type="text" name="codigo" id="codigo"/><br>
        <br>
        <label for="fechaAno"></label>
          FECHA:
          <select name="fechaAno" id="fechaAno">
            <option value=" "> </option>
            <option value="2012">2012</option>
          </select>
          <label for="fechaDia"></label>
          <select name="fechaMes" id="fechaMes">
            <option value=" "> </option>
            <option value="01">enero</option>
            <option value="02">febrero</option>
            <option value="03">marzo</option>
            <option value="04">abril</option>
            <option value="05">mayo</option>
            <option value="06">junio</option>
            <option value="07">julio</option>
            <option value="08">agosto</option>
            <option value="09">septiembre</option>
            <option value="10">octubre</option>
            <option value="11">noviembre</option>
            <option value="12">diciembre</option>
          </select> 
          <label for="fechaDia"></label>
          <select name="fechaDia" id="fechaDia">
            <option value=" "> </option>
            <option value="01">01</option>
            <option value="02">02</option>
            <option value="03">03</option>
            <option value="04">04</option>
            <option value="05">05</option>
            <option value="05">05</option>
            <option value="06">06</option>
            <option value="07">07</option>
            <option value="08">08</option>
            <option value="09">09</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
            <option value="26">26</option>
            <option value="27">27</option>
            <option value="28">28</option>
            <option value="29">29</option>
            <option value="30">30</option>
            <option value="31">31</option>
          </select>
          <br>        
        <br>
        <label for="codVisita"></label>
        CODIGO VISITA:
        <input type="text" name="codVisita" id="codVisita" /><br><br>
		 ESTADO RUTA : 
          <select name="estado">
            <option value="1">PENDIENTE</option>
            <option value="2">EN GESTION</option>
            <option value="3">REALIZADA</option>
          </select>
	<input type="hidden" name="accion" value="crea">
        <input type="hidden" name="page" value="proyecto">

        <div align="center"><br>
          <input name="Crear" type="submit" value="Crear">
        </div>
        </label>
      </form>      </td>
  </tr>
  <tr>
    <td height="301">&nbsp;</td>
  </tr>
</table>
</div>
<?php }} ?>